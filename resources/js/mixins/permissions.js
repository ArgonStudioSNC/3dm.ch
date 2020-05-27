module.exports = {
    methods: {
        can(permission) {
            if (this.$store.getters.getPermissionsLoadStatus !== 2) return false;
            return this.$store.getters.getPermissions.includes(permission);
        }
    },
}
