<template>
    <!-- Contact Form -->
    <div v-if="homedata && contacts" class="container py-16 md:py-20" id="contact">
        <h2
            class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
        >
            {{ homedata.cf_title[0] }}
        </h2>
        <div v-html = "homedata.cf_desc[0]">

        </div>
        <form @submit="checkForm()" class="mx-auto w-full pt-10 sm:w-3/4" id="submitform">
            <div class="flex flex-col md:flex-row">
                <input
                    class="mr-3 w-full rounded border-2 border-grey-50 px-4 py-3 font-body text-black md:w-1/2 lg:mr-5"
                    :placeholder="this.homedata.cf_input_name[0]"
                    type="text"
                    id="form-name"
                />
                <input
                    class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-0 md:ml-3 md:w-1/2 lg:ml-5"
                    :placeholder="this.homedata.cf_input_email[0]"
                    type="text"
                    id="form-email"
                />
                <input
                    class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-0 md:ml-3 md:w-1/2 lg:ml-5"
                    :placeholder="this.homedata.cf_input_phone[0]"
                    type="text"
                    id="form-phone"
                />
            </div>

            <textarea
                class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-8"
                :placeholder="this.homedata.cf_input_msg[0]"
                id="form-message"
                cols="30"
                rows="10"
            ></textarea>
            <button type="submit" @click.prevent = "sendContactData()"
                    class="mt-6 flex items-center justify-center rounded bg-primary px-8 py-3 font-header text-lg font-bold uppercase text-white hover:bg-grey-20"
            >
                {{  homedata.cf_input_text_send[0]  }}
                <i class="bx bx-chevron-right relative -right-2 text-3xl"></i>
            </button>
        </form>
        <div class="flex flex-col justify-around pt-16 lg:flex-row">
            <div
                class="w-full border-l-2 border-t-2 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3"
            >
                <div class="flex items-center">
                    <i class="bx bx-phone text-2xl text-grey-40"></i>
                    <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
                        {{ homedata.cf_input_phone[0] }}
                    </p>
                </div>
                <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
                    <a :href = "contacts.contacts[0][0]['link']">{{ contacts.contacts[0][0]["name"] }}</a>
                </p>
            </div>
            <div
                class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3 lg:border-l-0 lg:border-t-2"
            >
                <div class="flex items-center">
                    <i class="bx bx-envelope text-2xl text-grey-40"></i>
                    <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
                        {{ homedata.cf_input_email[0] }}
                    </p>
                </div>
                <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
                    <a :href = "contacts.contacts[0][1]['link']">{{ contacts.contacts[0][1]["name"] }}</a>
                </p>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    name: "ContactForm",
    props:[`homedata`,`contacts`],
    methods:{
        sendContactData(){}
    }
}
</script>

<style scoped>

</style>
