const { createApp } = Vue

createApp({
    data() {
        return {
            albums: [],
            api_url: 'script.php',
            flagActiveAlbum: false,
            activeAlbum: {}
        }
    },
    methods: {
        showAlbum(i) {
            this.flagActiveAlbum = !this.flagActiveAlbum;
            this.activeAlbum = this.albums[i];

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