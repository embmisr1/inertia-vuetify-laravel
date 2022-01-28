<template>
    <AuthLayout>
        <div class="grid h-screen place-content-center">
           <form @submit.prevent="form.post('/auth')">
            <v-card elevation="10" class="rounded-lg p-4 w-96" >
                <v-card-title primary-title>
                    <div>
                        <h3 class="text-3xl font-extrabold">Online</h3>
                    </div>
                </v-card-title>
                <div>
                    <v-text-field
                        v-model="form.username"
                        label="Name"
                        filled
                        :error-messages="form.errors.username"
                    ></v-text-field>
                     <v-text-field
                        v-model="form.password"
                        label="Password"
                        filled
                        type="password"
                        :error-messages="form.errors.password"
                    ></v-text-field>
                </div>
                <v-card-actions>
                    <v-btn text color="primary" type="submit">Log in</v-btn>
                </v-card-actions>
            </v-card>
           </form>
        </div>
    </AuthLayout>
</template>

<script>
import AuthLayout from "../layouts/auth.vue";
export default {
    components: {
        AuthLayout,
    },
    data() {
        return {
            form: this.$inertia.form({
                username: "",
                password: "",
            }),
        };
    },
};
</script>

<style></style>
