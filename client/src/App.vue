<template>
    <commutator :config="config"></commutator>
</template>

<script>
import Commutator from './components/commutator.vue'

export default {
    name: 'App',
    components: {
        Commutator
    }
}
</script>
