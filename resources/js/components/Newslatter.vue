<template>
    <form>
        <div class="flex flex-col sm:flex-row">
            <input
                :class="{ 'border-red-500': errors.email }"
                v-model="email"
                type="email"
                name="email"
                placeholder="Vaša emailová adresa"
                class="flex-1 bg-background-form rounded sm:rounded-r-none px-4 py-4 leading-normal border border-border-color-primary sm:border-r-0 shadow outline-none focus:border-green-700 z-10"
                required
            />
            <button
                @click.prevent="newslatterForm"
                data-element="submit"
                class="flex-2 w-40 uppercase bg-green-700 text-white rounded sm:rounded-l-none text-lg py-3 px-8 tracking-wide shadow focus:outline-none hover:bg-green-800 focus:bg-green-800 z-10 w-full sm:w-auto mt-4 sm:mt-0"
            >
                <span>Odoberať</span>
            </button>
        </div>
        <div class="pt-1" v-if="errors.email">
                <p
                    class="text-red-500 text-left"
                    v-for="(error, index) in errors.email"
                    :key="index"
                >
                    {{ error }}
                </p>
            </div>
        <div v-if="success">
            <div
                class="flex items-center bg-green-700 text-white text-sm font-semibold px-4 py-3 mt-5 shadow rounded "
                role="alert"
            >
                <svg
                    class="fill-current w-4 h-4 mr-2"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                >
                    <path
                        d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"
                    />
                </svg>
                <p>{{ success }}</p>
            </div>
        </div>
    </form>
</template>

<script>
const axios = require("axios");
export default {
    data() {
        return {
            email: "",
            errors: {},
            success: ""
        };
    },
    methods: {
        newslatterForm() {
            let NewslatterData = {
                email: this.email
            };
            axios
                .post("/newslatter", NewslatterData)
                .then(response => {
                    if (response.status === 201) {
                        (this.email = ""),
                            (this.success = response.data.message);
                    }
                })
                .catch(errors => {
                    this.errors = errors.response.data.errors;
                });
        }
    }
};
</script>

<style lang="scss" scoped></style>
