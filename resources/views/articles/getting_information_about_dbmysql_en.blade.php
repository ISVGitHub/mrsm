@extends('resume')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
         xmlns="http://www.w3.org/1999/html">
        <div class="row">
            @include('articles.header_template_articles')
        </div>

        <div class="row">
            <!-- LEFT BLOCK -->
            <div class="col-xs-12 col-sm-8">
                <h1>Getting Information About Databases and Tables from MySQL over MariaDB</h1>

                <div class="box">
                    <h2>Connecting to MariaDB</h2>
                    <p>Classical connecting to MariaDB and the basic connection parameters.</p>
                    <pre class="code"><strong>mysql -h</strong> hostname_or_ip <strong>-u</strong> username <strong>-p</strong>password database_name</pre>

                        <ul>
                            <li><p> -h specifies a host. Instead of using localhost, the IP is used.</p></li>
                            <li><p>-u specifies a use name, in this case username</p></li>
                            <li><p>-p specifies a password, password. Note that for passwords, unlike the other parameters, there cannot be a space between the the option (-p) and the value (password). It is also not secure to use a password in this way, as other users on the system can see it as part of the command that has been run. If you include the -p option, but leave out the password, you will be prompted for it, which is more secure.</p></li>
                            <li><p>The database name is provided as the first argument after all the options, in this case database_name.</p></li>
                        </ul>

                </div>
                <div class="box">
                    <h2>Show and select database</h2>
                    <p>It is supposed in case of connection the database isn't specified.</p>
                    <pre class="code"><strong>MariaDB [(none)]></strong>SHOW databases;</pre>
                    <p>SHOW DATABASES lists the databases on the MySQL server host.</p>
                    <pre class="code"><strong>MariaDB [(none)]></strong>USE db_name;</pre>
                    <p>The USE db_name statement tells MySQL to use the db_name database as
                        the default (current) database for subsequent statements.</p>
                    <pre class="code"><strong>MariaDB [(db_name)]></strong>SHOW tables;</pre>
                    <p>SHOW tables; lists the non-TEMPORARY tables in a given database.
                    <pre class="code"><strong>MariaDB [(db_name)]></strong>SELECT * FROM some_tables;</pre>
                    <p>SELECT is used to retrieve rows selected from one or more tables, and
                        can include UNION statements and subqueries.</p>


                </div>

            </div>
            <!-- RIGHT BLOCK -->
            @include('articles.right_block')
        </div>
    </div>
@stop