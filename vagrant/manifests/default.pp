class { 'apache':
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

# Need to do it in right order:
# exec { 'install_mcrypt':
# 	command => 'sudo apt-get -y install php5-mcrypt',
# }

# exec { 'restart_apache':
# 	command => 'sudo /etc/init.d/apache2 restart',
# }
# sudo chmod -R 644 /twitter-like/app/storage/

class { 'apache::mod::php':
    require => Exec['update'],
}

Class['apache'] -> Class['apache::mod::php'] -> Exec['install_mcrypt']

apache::vhost { "twitter-like":
    port => 80,
    docroot => "/twitter-like",
}

file { "/vagrant/index.php":
    content => "<?php echo phpinfo();",
}