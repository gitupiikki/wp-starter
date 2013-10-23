require 'pathname'

namespace :genesis do
    desc "Restart Apache + Varnish"
    task :restart, :roles => :web do
        pretty_print "Gracefully restarting Apache"
        invoke_command "sudo /etc/init.d/apache2 graceful"
        puts_ok

        pretty_print "Restarting Varnish"
        invoke_command "sudo /etc/init.d/varnish restart"
        puts_ok
    end


    desc "Start Apache + Varnish"
    task :start, :roles => :web do
        pretty_print "Starting Apache"
        invoke_command "sudo /etc/init.d/apache2 start"
        puts_ok

        pretty_print "Starting Varnish"
        invoke_command "sudo /etc/init.d/varnish start"
        puts_ok
    end

    desc "Stop Apache + Varnish"
    task :stop, :roles => :web do
        pretty_print "Stopping Apache"
        invoke_command "sudo /etc/init.d/apache2 stop"
        puts_ok

        pretty_print "Stopping Varnish"
        invoke_command "sudo /etc/init.d/varnish stop"
        puts_ok
    end

    desc "Fix permissions"
    task :permissions do
        pretty_print "Fixing permissions"
        sudo "mkdir -p #{deploy_to}"
        sudo "chown -R #{user}:www-data #{deploy_to}"
        sudo "chmod -R 0775 #{deploy_to}"
        puts_ok
    end

    namespace :logs do
        desc "Tail Apache error logs"
        task :default, :roles => :web do
            trap("INT") { puts 'Interupted'; exit 0; }
            sudo "tail -f /var/log/apache2/#{stage}.#{domain}-error.log" do |channel, stream, data|
                puts  # for an extra line break before the host name
                puts "#{channel[:host]}: #{data}"
                break if stream == :err
          end
        end
    end
end
