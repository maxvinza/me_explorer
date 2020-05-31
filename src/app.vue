<template>
    <div id = "app">
        <Device ref = "device"/>
    </div>
</template>

<script>
import Device from './components/device.vue'
export default {
    components: {
        Device
    },

    mounted: function() {
        axios
            .get(this.$route.query.url)
            .then(response => (this.$ref.device.info = response));
    }
}
</script>
