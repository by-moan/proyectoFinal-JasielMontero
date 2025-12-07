<script setup>
</script>

<template>
    <footer class="footer" id="footer">
        <div class="container">
            <div class="brand">
                <h2 class="hotel">El Santuario</h2>
                <p class="tagline">Donde cada estancia es un viaje inolvidable</p>
            </div>
            
            <div class="columns">
                <div class="col">
                    <h3>Acceso rápido</h3>
                    <ul>
                        <li><a>Cuartos y Suites</a></li>
                    </ul>
                </div>
                
                <div class="col">
                    <h3>Contacto</h3>
                    <address class="contact">
                        <div>123 Luxury Avenue</div>
                        <div>New York, NY 10001</div>
                        <div>Tel: +52 (641) 321 1234</div>
                        <div>Email: info@elsantuario.com</div>
                    </address>
                </div>
                
                <div class="col">
                    <h3>Mi contacto</h3>
                    <p class="me">Jasiel Amin Montero Plascencia</p>
                    <p>Tel: <a href="tel:+526413211699">+52 641 321 1699</a></p>
                    <p>Email: <a href="mailto:jasielmontero2004@gmail.com">jasielmontero2004@gmail.com</a></p>
                </div>
                
                <div class="col social">
                    <h3>Síguenos</h3>
                    <div class="icons">
                        <a href="#" rel="noopener">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden>
                                <rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor" stroke-width="1.5"/>
                                <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5"/>
                                <circle cx="17.5" cy="6.5" r="0.5" fill="currentColor"/>
                            </svg>
                        </a>
                        <a href="#" rel="noopener">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden>
                                <path d="M18 2h-3a4 4 0 0 0-4 4v3H8v4h3v8h4v-8h3l1-4h-4V6a1 1 0 0 1 1-1h3V2z" stroke="currentColor" stroke-width="1.2" fill="none"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="bottom">
                <div class="small">© 2025 Jasiel Montero, Todos los derechos reservados.</div>
            </div>
        </div>
    </footer>
</template>

<style scoped>
.footer{
    /* background: linear-gradient(180deg, #0f172a 0%, #071133 100%); */
    background-color: #e7d4c7;
    color: #492c24;
    padding: 2.5rem 1rem;
    font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
}
.container{
    max-width: 1100px;
    margin: 0 auto;
}
.brand{
    text-align: center;
    margin-bottom: 1.25rem;
}
.hotel{
    font-size: 1.25rem;
    margin: 0;
    letter-spacing: 0.4px;
}
.tagline{
    margin: 0.25rem 0 0;
    font-size: 0.95rem;
    opacity: 0.9;
}
.columns{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 1rem;
    margin-top: 1rem;
}
.col h3{
    margin: 0 0 0.5rem 0;
    font-size: 0.98rem;
}
.col ul{
    list-style: none;
    padding: 0;
    margin: 0;
}
.col a{
    color: inherit;
    text-decoration: none;
    opacity: 0.95;
}
.contact div{ margin-bottom: 0.25rem; }
.me{ font-weight: 600; }
.social .icons{
    display:flex;
    gap:0.5rem;
}
.icons a{ display:inline-flex; align-items:center; justify-content:center; width:36px; height:36px; border-radius:6px; background: rgba(255,255,255,0.03); text-decoration:none; }
.bottom{
    display:flex;
    justify-content:space-between;
    gap:1rem;
    align-items:center;
    margin-top:1.25rem;
    border-top: 1px solid rgba(255,255,255,0.05);
    padding-top:0.9rem;
    font-size:0.85rem;
    opacity:0.9;
}
.small{opacity:0.7}

@media (max-width:600px){
    .bottom{flex-direction:column; align-items:center; text-align:center}
}
</style>
