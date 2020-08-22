<template>
    <form class="mb-12">
        <div class="flex flex-wrap mb-6 -mx-4">
            <div class="w-full md:w-1/2 mb-6 md:mb-0 px-4">
                <label class="block mb-2 text-copy-primary" for="name">
                    Meno
                </label>
                <input
                    v-model="name"
                    :class="{ 'border-red-500': errors.name }"
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Ján Novák"
                    class="block w-full bg-background-form border border-border-color-primary shadow rounded outline-none focus:border-green-700 mb-2 p-4"
                    required
                />
                <div v-if="errors.name">
                    <p
                        class="text-red-500"
                        v-for="(error, index) in errors.name"
                        :key="index"
                    >
                        {{ error }}
                    </p>
                </div>
            </div>
            <div class="w-full px-4 md:w-1/2">
                <label class="block text-copy-primary mb-2" for="email">
                    Emailová adresa
                </label>

                <input
                    v-model="email"
                    :class="{ 'border-red-500': errors.email }"
                    type="email"
                    name="email"
                    id="email"
                    placeholder="novak@example.com"
                    class="block w-full bg-background-form border border-border-color-primary shadow rounded outline-none focus:border-green-700 mb-2 p-4"
                    required
                />
                <div v-if="errors.email">
                    <p
                        class="text-red-500"
                        v-for="(error, index) in errors.email"
                        :key="index"
                    >
                        {{ error }}
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full mb-12">
            <label class="block text-copy-primary mb-2" for="message">
                Správa
            </label>

            <textarea
                v-model="message"
                :class="{ 'border-red-500': errors.message }"
                id="message"
                rows="5"
                name="message"
                class="block w-full bg-background-form border border-border-color-primary shadow rounded outline-none appearance-none focus:border-green-700 mb-2 px-4 py-4"
                placeholder="Sem zadajte svoju správu."
                required
            ></textarea>
            <div v-if="errors.message">
                <p
                    class="text-red-500"
                    v-for="(error, index) in errors.message"
                    :key="index"
                >
                    {{ error }}
                </p>
            </div>
        </div>
        <div class="md:flex md:items-left mb-2">
            <div class=""></div>
            <label class="md:w-2/3 block text-gray-500 font-bold">
                <input
                    :class="{ 'border-red-500': errors.checkbox }"
                    v-model="checkbox"
                    class="mr-2 leading-tight"
                    type="checkbox"
                    name="checkbox"
                />
                <span class="text-sm">
                    Súhlasím so spracovaním osobných údajov.
                    <a href="/ochrana-osobnych-udajov">info</a>
                </span>

            </label>
        </div>
        <div v-if="errors.checkbox">
                <p
                    class="text-red-500 block"
                    v-for="(error, index) in errors.checkbox"
                    :key="index"
                >
                    {{ error }}
                </p>
            </div>
        <div class="flex justify-end w-full">
            <input
                type="submit"
                @click.prevent="submitForm"
                value="Odoslať"
                class="block bg-green-700 hover:bg-green-800 text-white text-sm font-semibold tracking-wide uppercase shadow rounded cursor-pointer px-6 py-3"
            />
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
            name: "",
            email: "",
            message: "",
            checkbox: "",
            errors: {},
            success: ""
        };
    },
    methods: {
        submitForm() {
            let FormData = {
                name: this.name,
                email: this.email,
                message: this.message,
                checkbox: this.checkbox
            };
            axios
                .post("/contact", FormData)
                .then(response => {
                    if (response.status === 201) {
                            this.name = "",
                            this.email = "",
                            this.message = "",
                            this.checkbox = "",
                            this.success = response.data.message;
                    }
                })
                .catch(errors => {
                    this.errors = errors.response.data.errors;
                });
        }
    }
};
</script>
