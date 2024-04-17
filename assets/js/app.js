const { createApp } = Vue

createApp({
    data() {
        return {
            albums: [],
            api_url: 'script.php'
        }
    },
    mounted() {
        axios
            .get(this.api_url)
            .then(resp => {
                //console.log(resp);
                this.albums = resp.data;
            })
            .catch(err => {
                console.log(err.message);
            })
    }
}).mount('#app')