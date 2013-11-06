#exec { 'install_module':
#	command => 'puppet module install puppetlabs/apache',
#}

class { 'apache':
	#require => Exec['install_module'],
	mpm_module => 'prefork',
	default_vhost => false,
}

include apache

Exec {
    path => ['/usr/bin', '/usr/local/bin'],
}

exec { 'update':
    command => 'sudo apt-get update',
}

class { 'apache::mod::php':
    require => Exec['update'],
}

apache::vhost { "twitter-like":
    port => 80,
    docroot => "/vagrant",
}

file { "/vagrant/index.php":
    content => "<?php echo phpinfo();",
}