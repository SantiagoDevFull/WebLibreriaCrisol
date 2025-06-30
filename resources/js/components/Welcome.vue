<template>
    <div>
        <!-- Intro -->
        <div id="intro" class="bg-image vh-100" style="
            background-image: url('https://cencomalls.pe/sites/default/files/styles/rm_tiendas_fotos_y_mapas/public/fotos-tienda/CRISOL1-NIVEL%2520-MENOS1-CENCOLAMOLINA.jpg.webp?itok=sh6c7k8e');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        ">
            <div class="mask d-flex justify-content-center align-items-center"
                style="background-color: rgba(250, 182, 162, 0.15); height: 100%; width: 100%;">
                <div class="w-100 px-3" style="position: absolute; top: 60%; transform: translateY(-50%);">
                    <div class="bg-white bg-opacity-50 text-center py-4">
                        <h2 class="mb-4 badge bg-dark fs-4">Descubre tu próximo libro</h2>
                        <br>
                        <p class="mb-4 badge bg-danger fs-4">Más de 50,000 títulos disponibles. Envíos a todo el Perú en
                            24-48
                            horas. Tu mundo de lectura te espera.</p>
                        <br>
                        <a href="/catalogo" class="btn btn-primary me-2">Explorar Catálogo</a>
                        <a href="#" class="btn btn-success">Ofertas Especiales</a>
                    </div>
                </div>
            </div>
        </div>

        <section class="py-5 bg-light">
            <div class="container">
                <h3 class="text-center mb-5 fw-bold">Testimonios de nuestros lectores</h3>

                <div id="customCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <!-- Testimonio 1 -->
                        <div class="carousel-item active">
                            <div class="card mx-auto shadow-lg p-4" style="max-width: 600px; border-radius: 1rem;">
                                <div class="d-flex align-items-center">
                                    <img src="https://randomuser.me/api/portraits/women/44.jpg"
                                        class="rounded-circle me-3" width="70" height="70" alt="Ana">
                                    <div>
                                        <h5 class="mb-0">Ana Pérez</h5>
                                        <small class="text-muted">Lectora frecuente</small>
                                    </div>
                                </div>
                                <p class="mt-4 fst-italic">“Crisol tiene todo lo que necesito: buenos precios, entregas
                                    rápidas y una variedad impresionante de libros.”</p>
                            </div>
                        </div>

                        <!-- Testimonio 2 -->
                        <div class="carousel-item">
                            <div class="card mx-auto shadow-lg p-4" style="max-width: 600px; border-radius: 1rem;">
                                <div class="d-flex align-items-center">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg"
                                        class="rounded-circle me-3" width="70" height="70" alt="Carlos">
                                    <div>
                                        <h5 class="mb-0">Carlos Ramírez</h5>
                                        <small class="text-muted">Docente universitario</small>
                                    </div>
                                </div>
                                <p class="mt-4 fst-italic">“Excelente atención y catálogo. Siempre encuentro libros
                                    nuevos e interesantes para mis clases.”</p>
                            </div>
                        </div>

                        <!-- Testimonio 3 -->
                        <div class="carousel-item">
                            <div class="card mx-auto shadow-lg p-4" style="max-width: 600px; border-radius: 1rem;">
                                <div class="d-flex align-items-center">
                                    <img src="https://randomuser.me/api/portraits/women/65.jpg"
                                        class="rounded-circle me-3" width="70" height="70" alt="Lucía">
                                    <div>
                                        <h5 class="mb-0">Lucía Fernández</h5>
                                        <small class="text-muted">Madre y lectora</small>
                                    </div>
                                </div>
                                <p class="mt-4 fst-italic">“Disfruto mucho comprar libros para mis hijos. Crisol es
                                    confiable y rápido en los envíos.”</p>
                            </div>
                        </div>

                    </div>

                    <!-- Controles -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#customCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#customCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: 'BookIntro',
    mounted() {

    }
}
</script>
