@extends('resume')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
         xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-xs-12">
                <div id="photo-header" class="text-center">
                    <!-- PHOTO (AVATAR) -->
                    <div id="photo">
                        <img src="{{ asset('img/myphoto.png') }}" alt="avatar">
                    </div>
                    @include('common.language_switch')
                    <div id="text-header">
                        <ul class="nav nav-pills">
                            <li class="active"><a href="/main">Main</a></li>
                            <li><a href="#">Profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- LEFT BLOCK -->
            <div class="col-xs-12 col-sm-8">
                <h1>How to install Ruby on Rails on CentOS 7</h1>

                <div class="box">
                    <h2>Introduction</h2>

                    <p>Ruby on Rails is an extremely popular open-source web framework that provides a great way to
                        write web applications with Ruby.</p>

                    <p>This tutorial will show you how to install Ruby on Rails on CentOS 7, using rbenv. This will
                        provide you with a solid environment for developing your Ruby on Rails applications. rbenv
                        provides an easy way to install and manage various versions of Ruby, and it is simpler and less
                        intrusive than RVM. This will help you ensure that the Ruby version you are developing against
                        matches your production environment.</p>
                </div>
                <div class="box">
                    <h2>Prerequisites</h2>

                    <p>Before installing rbenv, you must have access to a superuser account on a CentOS 7 server. Follow
                        steps 1-3 of this tutorial, if you need help setting this up:
                        <a href="/main"> Initial Server Setup with CentOS 7.</a>
                        When you have the prerequisites out of the way, let's move on to installing rbenv.</p>
                </div>
                <div class="box">
                    <h2>Install rbenv</h2>

                    <p>Let's install rbenv, which we will use to install and manage our Ruby installation.<br>
                        Install the rbenv and Ruby dependencies with yum:</p>

                    <pre class="code">sudo yum install -y git-core zlib zlib-devel gcc-c++ patch readline readline-devel libyaml-devel libffi-devel openssl-devel make bzip2 autoconf automake libtool bison curl sqlite-devel</pre>

                    <p>Now we are ready to install rbenv. The easiest way to do that is to run these commands, as the
                        user that will be using Ruby:</p>
                    <pre class="code">cd
git clone git://github.com/sstephenson/rbenv.git .rbenv
echo 'export PATH="$HOME/.rbenv/bin:$PATH"' >> ~/.bash_profile
echo 'eval "$(rbenv init -)"' >> ~/.bash_profile
exec $SHELL

git clone git://github.com/sstephenson/ruby-build.git ~/.rbenv/plugins/ruby-build
echo 'export PATH="$HOME/.rbenv/plugins/ruby-build/bin:$PATH"' >> ~/.bash_profile
exec $SHELL</pre>
                    <p>This installs rbenv into your home directory, and sets the appropriate environment variables that will allow rbenv to the active version of Ruby.

                        Now we're ready to install Ruby.</p>

                </div>
                <div class="box">
                   <h2>Install Ruby</h2>
                    <p>Before using rbenv, determine which version of Ruby that you want to install. We will install the latest version, Ruby 2.2.1.

                        As the user that will be using Ruby, install it with these commands:</p>
                    <pre>rbenv install -v 2.2.1
rbenv global 2.2.1</pre>
                    <p>The <mark>global</mark> sub-command sets the default version of Ruby that all of your shells will use. If you want to install and use a different version, simply run the rbenv commands with a different version number.<br>

                        Verify that Ruby was installed properly with this command:</p>
                    <pre>ruby -v</pre>
                    <p>It is likely that you will not want Rubygems to generate local documentation for each gem that you install, as this process can be lengthy. To disable this, run this command:</p>
                    <pre>echo "gem: --no-document" > ~/.gemrc</pre>
                    <p>You will also want to install the bundler gem, to manage your application dependencies:</p>
                    <pre>gem install bundler</pre>
                    <p>Now that Ruby is installed, let's install Rails.</p>
                </div>
                <div class="box">
                    <h2>Install Rails</h2>
                    <p>As the same user, install Rails 4.2.0 with this command:</p>
                    <pre>gem install rails -v 4.2.0</pre>
                    <p>Whenever you install a new version of Ruby or a gem that provides commands, you should run the rehash sub-command. This will install shims for all Ruby executables known to rbenv, which will allow you to use the executables:</p>
                    <pre>rbenv rehash</pre>
                    <p>Verify that Rails has been installed properly by printing its version, with this command:</p>
                    <pre>rails -v</pre>
                    <p>If it installed properly, you will see this output: <mark>Rails 4.2.0.</mark></p>
                </div>
                <div class="box">
                    <h2>Install Javascript Runtime</h2>
                    <p>A few Rails features, such as the Asset Pipeline, depend on a Javascript runtime. We will install Node.js to provide this functionality.<br>

                    Add the EPEL yum repository:</p>

                    <pre>sudo yum -y install epel-release</pre>
                    <p>Then install the Node.js package:</p>

                    <pre>sudo yum install nodejs</pre>

                    <p class="bg-info"><b>Note:</b> This will probably not install the latest release of Node.js, as Enterprise Linux does not consider it to be "stable". If you want to install the latest version, feel free to build it on your own.</p>

                    <p><strong>Congratulations!</strong> Ruby on Rails is now installed on your system.</p>
                </div>
                <div class="box">
                    <h3>Optional Steps</h3>
                    <p>If you're looking to improve your setup, here are a few suggestions:</p>
                    <h4>Configure Git</h4>
                    <p>A good version control system is essential when coding applications. Follow the How To Set Up Git section of the <a href="#">How To Install Git tutorial</a>.</p>
                    <h4>Install a Database</h4>
                    <p>Rails uses sqlite3 as its default database, which may not meet the requirements of your application. You may want to install an RDBMS, such as MySQL or PostgreSQL, for this purpose.<br>

                        For example, if you want to use MariaDB as your database, install it with yum:</p>
                    <pre>sudo yum install mariadb-server mariadb-devel</pre>
                    <p>Then install the <mark>mysql2</mark> gem, like this:</p>
                    <pre>gem install mysql2</pre>
                    <p>Now you can use MariaDB with your Rails application. Be sure to configure MariaDB and your Rails application properly.</p>
                    <h4>Create a Test Application (Optional)</h4>
                    <p>If you want to make sure that your Ruby on Rails installation went smoothly, you can quickly create a test application to test it out. For simplicity, our test application will use sqlite3 for its database.

                        Create a new Rails application in your home directory:</p>
                    <pre>cd ~
rails new testapp</pre>
                    <p>Then move into the application's directory:</p>
                    <pre>cd testapp</pre>
                    <p>Create the sqlite3 database:</p>
                    <pre>rake db:create</pre>
                    <p>If you don't already know the public IP address of your server, look it up with this command:</p>
                    <pre>ip addr show enp2s0 | grep inet | awk '{ print $2; }' | sed 's/\/.*$//'</pre>
                    <p>Copy the IPv4 address to your clipboard, then use it with this command to start your Rails application (substitute the highlighted part with the IP address):</p>
                    <pre>rails server --binding=server_public_IP</pre>
                    <p>If it is working properly, your Rails application should be running on port 3000 of the public IP address of your server. Visit your Rails application by going there in a web browser:</p>
                    <pre>http://server_public_IP:3000</pre>
                    <p>If you see the Rails "Welcome aboard" page, your Ruby on Rails installation is working properly!</p>
                    <h4>Conclusion</h4>
                    <p>You're now ready to start developing your new Ruby on Rails application. Good luck!</p>

                </div>

            </div>
            <!-- RIGHT BLOCK -->
            <div class="col-xs-12 col-sm-4">
                <div class="box alert-link">
                    <h3>Another articles</h3>
                    <ul class="list-unstyled">
                        <li><h4><a href="/main">How to install Centos 7</a></h4></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
@stop