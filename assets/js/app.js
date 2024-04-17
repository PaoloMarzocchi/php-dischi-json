const { createApp } = Vue

createApp({
    data() {
        return {
            $testJS: [],
            api_url: 'script.php'
        }
    },
    mounted() {
        axios
            .get(this.api_url)
            .then(resp => {
                console.log(resp);
                this.$testJS = resp.data;
            })
            .catch(err => {
                console.log(err.message);
            })
    }
}).mount('#app')