URUT = 6
NAMA = %q(CProject)
DOMAIN = %q(c-project.rq.id)
ROOT = File.expand_path('public', Dir.pwd)

module Resolv
	def domain_baru(domain, alamat=nil)
		paket_aturan = {
			nama_domain: domain, 
			alamat_ip: alamat.nil? ? '127.0.0.1' : alamat
		}

		sys = File.open('/etc/resolv.conf', 'r+')
		sys.pos = sys.size
		sys.write(<<~ATURAN_BARU % paket_aturan)
		nameserver %<alamat_ip>s
		domain %<nama_domain>s
		domain localhost
		ATURAN_BARU
		sys.close
	end
end

module Apache
	def host_web(urutan, nama, domain, root)
		paket_aturan = {
			nama_domain: domain, 
			papan_web: File.expand_path(%q(..), root), 
			ujung_web: root
		}

		aturan_apache = "%03d-%s.conf" % [urutan, nama.downcase]
		rute_aturan = File.join(%q(/etc/apache2/sites-available), aturan_apache)
		return if File.exist?(rute_aturan)
		sys = File.open(rute_aturan, 'w')
		sys.write(<<~ATURAN_APACHE % paket_aturan)
		<Directory %<papan_web>s/>
			Options Indexes FollowSymLinks
			Require all granted
			AllowOverride All
			Order deny,allow
			Allow from all
		</Directory>

		<VirtualHost *:80>
			ServerAdmin webmaster@localhost
			DocumentRoot %<ujung_web>s
			ErrorLog ${APACHE_LOG_DIR}/error.log
			CustomLog ${APACHE_LOG_DIR}/access.log combined

			ServerName %<nama_domain>s
		</VirtualHost>
		ATURAN_APACHE
		sys.close
		sh "ln -fs ../sites-available/#{aturan_apache} /etc/apache2/sites-enabled/#{aturan_apache}"
		sh %q(service apache2 restart)
	end
end

include Resolv
include Apache

class KurangSakti < StandardError ; end

task :siapkanWebsite do
	unless ENV['USER'].eql?('root')
		raise KurangSakti, 'User yang dipakai saat ini bukan root'
	end
	domain_baru(DOMAIN)
	host_web(URUT, NAMA, DOMAIN, ROOT)
end
