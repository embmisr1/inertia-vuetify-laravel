export default {
    methods: {
        success(message = "No Message") {
            this.$buefy.toast.open({
                 message,
                type: "is-success",
                position:"is-top-right",
                queue:false,
            });
        },
        error(message = "No Message") {
          this.$buefy.toast.open({
              message,
              type: "is-danger",
              position:"is-top-right",
              queue:false,
          });
      },
      info(message = "No Message") {
        this.$buefy.toast.open({
            message,
            position:"is-top-right",
            queue:false,
        });
    },
    },
};
