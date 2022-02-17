<template>
    <div class="container-fluid">
        <div class="row">
            <aside class="col-xs-12 col-md-3">
                <div class="sidebar mb-5">
                    <h5 class="text-center">
                        Categories
                    </h5>

                    <ul class="nav flex-column mb4">
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                Home
                            </a>
                        </li>

                        <li class="nav-item" v-for="category in categories" :key="category.id">
                            <a class="nav-link" 
                                v-if="category.link == '#'"
                                :href= "category.link"
                                @click="changeLegend(category)"
                            >
                                {{category.title}}
                            </a>
                            <a class="nav-link" 
                                v-else
                                :href= "category.link + category.id + '/' + category.slug"
                            >
                                {{category.title}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <button @click="resetData" class="btn btn-danger w-100 mt-3">Restart</button>
                        </li>
                    </ul>
                </div>
            </aside>

            <div class="col-xs-12 col-md-9">
                <div class="row">
                    <div class="col-12">
                        <h1 v-if="linkClick == false">
                            Products
                        </h1>
                        <h1 v-else>
                            Oups, there's an error !
                        </h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-6 mb-2 pb-2">
                        TODO - load some products !
                    </div>
                </div>

                <div class="row">
                    <span class="p-3">
                        {{ legend }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: 'Products',
    data() {
        return {
            legend: 'Shipping takes 10-12 weeks, and products probably won\'t work',
            linkClick: false,
            categories: [
                {
                    title: 'All',
                    id: 1,
                    description: 'All products',
                    slug: 'all',
                    link: '#'
                },
                {
                    title: 'Electronics',
                    id: 2,
                    description: 'Electronics products',
                    slug: 'electronics',
                    link: '#'
                },
                {
                    title: 'Other',
                    id: 3,
                    description: 'Other products',
                    slug: 'other',
                    link: '/products/'
                }
            ],
        };
    },
    methods: {
        resetData() {
            this.legend = 'Shipping takes 10-12 weeks, and products probably won\'t work';
            this.linkClick = false;
        },
        changeLegend(category) {
            if(category.link == '#') {
                this.legend = category.description;
                this.linkClick = true;
            }
        }
    },
    mounted() {
        console.log(this.categories);
    }
};
</script>

<style lang="scss">
@import '../../../styles/components/light-component.scss';

.sidebar {
    @include light-component;

    ul {
        li a:hover {
            background: $blue-component-link-hover;
        }
    }
}
</style>