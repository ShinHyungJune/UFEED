<template>
</template>
<script>

export default {
    components: {},

    data() {
        return {
            banners: this.$page.props.banners,
            reviews: this.$page.props.reviews,

            form: this.$inertia.form({

            }),
        }
    },

    methods: {
        filter(){
            axios.get("/api/nodes", {
                params: {
                    page: 1,
                    pageSize:30,
                    view:"node",
                    nid:"All",
                    apiKey:"f9c61147-737e-4b8d-8210-0fc7b2c19751"
                }
            }).then(response => {
                console.log(response);
            })


            console.log(data.result);
        },
        // ?page=1&pageSize=30&view=node&nid=All&apiKey={}
    },

    mounted() {
        this.filter();
    }
}
</script>
