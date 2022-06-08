export default {
    methods: {
        confirmDelete(message = 'This action  cannot be undone', callback) {
            this.$buefy.dialog.confirm({
                title: 'Are You Sure',
                message: message,
                confirmText: 'Delete',
                type: 'is-danger',
                hasIcon: true,
                onConfirm: callback,
            })
        },
    },
}
