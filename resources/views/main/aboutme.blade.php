@if (LaravelLocalization::getCurrentLocale() == 'en')
<div class="box">
    <h2>About Me</h2>
    <p>I'm freelancer. My aspirations and life philosophy constantly develop and continous improvement. I’m interested in scalability, both from a software perspective, as well as a system and network perspective. I have a multi-functional and responsible approach to projects and startups. When I don't know somthing is a personal challenge.</p>
</div>
@else
    <div class="box">
        <h2>Обо мне</h2>
        <p class="text-justify">Я фрилансер. Мои стремления в жизни постоянное развитие и совершенствование. Мне интересна масштабность, как с точки зрения программного обеспечения, так и системного администрирования. У меня многофункциональный, ответственный подход к реализации проектов и стартапов. Когда я чего-то не знаю, то это личный вызов для меня.</p>
    </div>
@endif