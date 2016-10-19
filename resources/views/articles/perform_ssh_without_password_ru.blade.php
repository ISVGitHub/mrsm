@extends('resume')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
         xmlns="http://www.w3.org/1999/html">
        <div class="row">
        @include('articles.header_template_articles')
        <!-- LEFT BLOCK Content Article -->
            <div class="col-xs-12 col-sm-8">
                <h1>@if($title){{ $title }}@endif</h1>
                <div class="box">
                    <p>Намного удобнее, быстрее и безопаснее подключиться на удаленный сервер по SSH, без ввода пароля.</p>
                    <p>Речь идет об аутентификации по ключам.</p>
                    <p>C помощью набора утилит из OpenSSH ее можно реализовать в три простых шага :</p>
                    <ul><li>Сгенерировать ключи аутентификации на локальной машине;
                        </li><li>Скопировать открытый ключ на удаленный сервер;
                        </li><li>Добавить секретный ключ в агент аутентификации.</li></ul>
                    <h2>Генерируем пару ключей на локальной машине</h2>
                    <p>Сгенерируем ключи аутентификации для SSH с помощью ssh-keygen.</p>
                    <pre class="code">$ ssh-keygen</pre>
                    <p>На выходе будет что-то вроде:</p>
                    <pre class="code">Generating public/private rsa key pair.
Enter file in which to save the key (/home/user/.ssh/id_rsa):
Created directory '/home/user/.ssh'.
Enter passphrase (empty for no passphrase):
Enter same passphrase again:
Your identification has been saved in /home/user/.ssh/id_rsa.
Your public key has been saved in /home/user/.ssh/id_rsa.pub.
The key fingerprint is:
SHA256:/RXxn09o7vn4m8LiPXaPm0QFLu4G/lvwXbVSa/LxrB4</pre>
                </div>
                <div class="box">
                    <h2>Устанавливаем открытый ключ на удаленном сервере</h2>
                    <p>С помощью ssh-copy-id устанавливаем открытый ключ (id_rsa.pub) на удаленный сервер. Он будет скопирован в файл authorized_keys.</p>
                    <pre class="code">$ ssh-copy-id -i ~/.ssh/id_rsa.pub UserName@RemoteServer</pre>
                    <p>На выходе:</p>
                    <pre class="code">UserName@RemoteServer's password: ********
Now try logging into the machine, with "ssh 'username@remoteserver'", and check in:
~/.ssh/authorized_keys
to make sure we haven't added extra keys that you weren't expecting.</pre>
                </div>
                <div class="box">
                    <h2>Добавляем секретный ключ в агент аутентификации на локальной машине</h2>
                    <p>С помощью ssh-add добавим секретный ключ в агент аутентификации (ssh-agent).</p>
                    <pre class="code">$ ssh-add</pre>
                    <p>На выходе:</p>
                    <pre class="code">Identity added: /home/user/.ssh/id_rsa (/home/user/.ssh/id_rsa)</pre>
                </div>
            </div>
            <!-- RIGHT BLOCK -->
            @include('articles.right_block')
        </div>
    </div>
@stop