<template>
    <div class="container mt-4">
        <h3 class="mb-4">📚 Catálogo de Libros</h3>

        <div class="row">
            <div v-for="book in books" :key="book.id" class="col-md-3 mb-4">
                <div class="card h-100">
                    <img v-if="book.volumeInfo.imageLinks" :src="book.volumeInfo.imageLinks.thumbnail"
                        class="card-img-top" alt="Portada">
                    <div class="card-body">
                        <h6 class="card-title">{{ book.volumeInfo.title }}</h6>
                       <p class="card-text">
  {{ book.volumeInfo.authors ? book.volumeInfo.authors.join(', ') : 'Autor desconocido' }}
</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Paginación -->
        <div class="text-center mt-4">
            <button class="btn btn-secondary me-2" :disabled="page === 1" @click="page--">Anterior</button>
            <button class="btn btn-primary" @click="page++">Siguiente</button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            books: [],
            page: 1,
        };
    },
    watch: {
        page: "fetchBooks",
    },
    mounted() {
        this.fetchBooks();
    },
    methods: {
        async fetchBooks() {
            const res = await axios.get(`/api/catalog?page=${this.page}`);
            this.books = res.data.items || [];
        },
    },
};
</script>

<style scoped>
.card {
    min-height: 100%;
}
</style>
