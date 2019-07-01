<template>
    <div class="is-pulled-right">
        <i class="fa fa-circle green" v-if="checkUser()"></i>
        <i class="fa fa-circle red" v-else></i>
    </div>
</template>

<script>
    export default {
        props: ['user', 'onlineusers'],
        methods: {
            checkUser: function() {
                return _.find(this.onlineusers, {id: this.user.id});
            }
        }
    }
</script>

<style lang="css">
    .red {
        color: red;
    }
    .green {
        color: green;
    }
</style>
