<?php
require_once 'config/vista.php';
$page = 'FAQs';
$title = "Preguntas frecuentes | Sinopsis Studio";
$description = "Respuestas sobre reservas, sesiones, entregas y servicios de Sinopsis Studio.";
require_once "header.php";
?>
<style>
.ss-faq-page{background:#fff;color:#111;--faq-line:#ddd;--faq-muted:#666}
.ss-faq-page .faq-intro{padding:90px 0 55px;text-align:center}
.ss-faq-page .faq-kicker{color:#666;font-size:.78rem;font-weight:700;letter-spacing:.16em;text-transform:uppercase}
.ss-faq-page .faq-intro h2{color:#111;font-family:var(--headings-font);font-size:clamp(2rem,4vw,3.8rem);font-weight:500;margin:12px auto 18px}
.ss-faq-page .faq-intro p{color:var(--faq-muted);margin:0 auto;max-width:650px}
.ss-faq-page .faq-tools{align-items:center;display:flex;gap:12px;justify-content:space-between;margin-bottom:24px}
.ss-faq-page .faq-search{border:1px solid var(--faq-line);border-radius:0;color:#111;min-height:48px;padding:0 16px;width:min(100%,420px)}
.ss-faq-page .faq-tabs{display:flex;flex-wrap:wrap;gap:8px}
.ss-faq-page .faq-tab{background:#fff;border:1px solid #111;border-radius:0;color:#111;cursor:pointer;font-size:.78rem;letter-spacing:.06em;padding:11px 14px;transition:background .25s,color .25s}
.ss-faq-page .faq-tab:hover,.ss-faq-page .faq-tab.is-active{background:#111;color:#fff}
.ss-faq-page .faq-list{border-top:1px solid var(--faq-line);margin-bottom:90px}
.ss-faq-page .faq-item{border-bottom:1px solid var(--faq-line)}
.ss-faq-page .faq-item.is-hidden{display:none}
.ss-faq-page .faq-question{align-items:center;background:transparent;border:0;color:#111;cursor:pointer;display:flex;font-family:var(--body-font);font-size:1.05rem;font-weight:700;justify-content:space-between;padding:25px 8px;text-align:left;width:100%}
.ss-faq-page .faq-question:hover,.ss-faq-page .faq-question[aria-expanded=true]{color:#555}
.ss-faq-page .faq-answer{display:grid;grid-template-rows:0fr;opacity:0;overflow:hidden;transition:grid-template-rows .35s ease,opacity .35s ease}
.ss-faq-page .faq-answer p{color:var(--faq-muted);margin:0;min-height:0;overflow:hidden;padding:0 8px}
.ss-faq-page .faq-question[aria-expanded=true]+.faq-answer{grid-template-rows:1fr;opacity:1}
.ss-faq-page .faq-question[aria-expanded=true]+.faq-answer p{padding-bottom:25px}
.ss-faq-page .faq-icon{height:18px;margin-left:16px;position:relative;width:18px}
.ss-faq-page .faq-icon:before,.ss-faq-page .faq-icon:after{background:currentColor;content:'';height:1px;left:1px;position:absolute;top:8px;transition:transform .25s;width:16px}
.ss-faq-page .faq-icon:after{transform:rotate(90deg)}
.ss-faq-page .faq-question[aria-expanded=true] .faq-icon:after{transform:rotate(0)}
.ss-faq-page .faq-contact{background:#111;color:#fff;padding:75px 20px;text-align:center}
.ss-faq-page .faq-contact h3{color:#fff;margin-bottom:18px}.ss-faq-page .faq-contact p{color:#ccc;margin:0 auto 28px;max-width:560px}
.ss-faq-page .faq-contact a{background:#fff;color:#111}
@media(max-width:768px){.ss-faq-page .faq-intro{padding:65px 0 40px}.ss-faq-page .faq-tools{align-items:stretch;flex-direction:column}.ss-faq-page .faq-search{width:100%}}
</style>

<div class="top-single-bkg topsinglepage">
    <div class="topsingleimg"><img src="images/pages/8737.jpg" alt="Preguntas frecuentes de Sinopsis Studio" width="1920" height="680"></div>
    <div class="inner-desc"><div class="container"><h1 class="display-2 single-post-title">FAQs</h1><span class="post-subtitle">Respuestas claras para planificar tu sesión</span></div></div>
</div>

<main id="wrap-content" class="page-content page-holder custom-page-template page-full fullscreen-page clearfix ss-faq-page">
    <section class="faq-intro"><div class="container"><div class="faq-kicker">Sinopsis Studio</div><h2>Todo lo que necesitas saber</h2><p>Respuestas sobre reservas, sesiones, entregas y nuestros servicios.</p></div></section>
    <section><div class="container">
        <div class="faq-tools"><input class="faq-search" id="faqSearch" type="search" placeholder="Buscar una pregunta..." aria-label="Buscar una pregunta"><div class="faq-tabs" role="tablist" aria-label="Filtrar preguntas"><button class="faq-tab is-active" type="button" data-category="all">Todas</button><button class="faq-tab" type="button" data-category="reservas">Reservas</button><button class="faq-tab" type="button" data-category="entrega">Entrega</button><button class="faq-tab" type="button" data-category="servicios">Servicios</button></div></div>
        <div class="faq-list" id="faqList">
            <div class="faq-item" data-category="reservas"><button class="faq-question" type="button" aria-expanded="false">¿Cómo separo una fecha?<span class="faq-icon" aria-hidden="true"></span></button><div class="faq-answer"><p>Escríbenos por WhatsApp con el servicio, fecha y lugar. Confirmamos disponibilidad y te indicamos el proceso para reservar.</p></div></div>
            <div class="faq-item" data-category="reservas"><button class="faq-question" type="button" aria-expanded="false">¿Puedo personalizar un paquete?<span class="faq-icon" aria-hidden="true"></span></button><div class="faq-answer"><p>Sí. Podemos adaptar cobertura, cantidad de fotos, video, impresiones y desplazamiento a las necesidades de tu evento.</p></div></div>
            <div class="faq-item" data-category="entrega"><button class="faq-question" type="button" aria-expanded="false">¿Cómo entregan las fotografías?<span class="faq-icon" aria-hidden="true"></span></button><div class="faq-answer"><p>Recibes una galería digital con tus fotografías editadas. Los tiempos aparecen detallados en cada paquete.</p></div></div>
            <div class="faq-item" data-category="entrega"><button class="faq-question" type="button" aria-expanded="false">¿También realizan video?<span class="faq-icon" aria-hidden="true"></span></button><div class="faq-answer"><p>Sí. Ofrecemos video cinematográfico para eventos, bodas, cumpleaños, bautizos y sesiones corporativas.</p></div></div>
            <div class="faq-item" data-category="servicios"><button class="faq-question" type="button" aria-expanded="false">¿Trabajan fuera de Arequipa?<span class="faq-icon" aria-hidden="true"></span></button><div class="faq-answer"><p>Sí. Coordinamos los viáticos y el desplazamiento antes de confirmar la reserva.</p></div></div>
            <div class="faq-item" data-category="servicios"><button class="faq-question" type="button" aria-expanded="false">¿Puedo solicitar fotos para redes sociales?<span class="faq-icon" aria-hidden="true"></span></button><div class="faq-answer"><p>Sí. Podemos preparar formatos verticales, cuadrados y horizontales para tus canales digitales.</p></div></div>
        </div>
    </div></section>
    <section class="faq-contact"><div class="container"><h3 class="display-5">¿No encontraste lo que buscabas?</h3><p>Cuéntanos qué necesitas y te orientamos personalmente.</p><a class="ss-btn-primary" href="https://wa.me/51941221847?text=Hola%2C%20tengo%20una%20pregunta%20sobre%20los%20servicios%20de%20Sinopsis%20Studio" target="_blank" rel="noopener noreferrer">Escribir por WhatsApp</a></div></section>
</main>

<?php require_once "footer.php"; ?>
<script>
(function(){var search=document.getElementById('faqSearch'),tabs=Array.from(document.querySelectorAll('.faq-tab')),items=Array.from(document.querySelectorAll('.faq-item')),buttons=Array.from(document.querySelectorAll('.faq-question')),category='all';function filter(){var term=(search.value||'').toLowerCase().trim();items.forEach(function(item){item.classList.toggle('is-hidden',!(category==='all'||item.dataset.category===category)||!!term&&item.textContent.toLowerCase().indexOf(term)===-1);});}tabs.forEach(function(tab){tab.addEventListener('click',function(){category=tab.dataset.category;tabs.forEach(function(item){item.classList.toggle('is-active',item===tab);});filter();});});search.addEventListener('input',filter);buttons.forEach(function(button){button.addEventListener('click',function(){var open=button.getAttribute('aria-expanded')==='true';buttons.forEach(function(item){item.setAttribute('aria-expanded','false');});button.setAttribute('aria-expanded',open?'false':'true');});});})();
</script>
</body>
</html>