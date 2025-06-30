<template>
    <div class="container mt-4">
        <h3 class="mb-4">📚 Catálogo de Libros</h3>

        <!-- Buscador y categoría -->
        <div class="row mb-3">
            <div class="col-md-6">
                <input v-model="search" @input="debouncedFetch" type="text" class="form-control"
                    placeholder="Buscar libro o autor...">
            </div>
            <div class="col-md-4">
                <select v-model="category" @change="fetchBooks" class="form-select">
                    <option value="">Todas las categorías</option>
                    <option value="fiction">Ficción</option>
                    <option value="history">Historia</option>
                    <option value="science">Ciencia</option>
                    <option value="art">Arte</option>
                    <option value="biography">Biografía</option>
                </select>
            </div>
        </div>

        <!-- Libros -->
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

        <!-- Navegación -->
        <div class="text-center mt-4">
            <button class="btn btn-secondary me-2" :disabled="page === 1" @click="page--">Anterior</button>
            <button class="btn btn-primary" @click="page++">Siguiente</button>
        </div>
    </div>
</template>

<script>
import _ from 'lodash';

export default {
    data() {
        return {
            books: [],
            page: 1,
            search: '',
            category: '',
        };
    },
    watch: {
        page: "fetchBooks",
    },
    mounted() {
        this.fetchBooks();
        this.debouncedFetch = _.debounce(this.fetchBooks, 500);
    },
    methods: {
        async fetchBooks() {
            try {
                const res = await axios.get(`/api/catalog`, {
                    params: {
                        page: this.page,
                        q: this.search || 'a',
                        category: this.category,
                    }
                });
                this.books = res.data.items || [];
            } catch (error) {
                console.error("Error al obtener libros:", error);
            }
        }
    }
};
</script>

<style scoped>
.card {
    min-height: 100%;
}
</style>
