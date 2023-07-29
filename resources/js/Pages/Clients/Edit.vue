<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const props = defineProps({
    client: Object
})

const form = useForm({
    email: props.client.email,
    customer: props.client.customer,
    address: props.client.address,
    foods: props.client.foods,
    drinks: props.client.drinks,
    price: props.client.price,

})

function submit() {

    if (form.price === '') {
        // If the price is empty, call the updatePrice function to calculate and set it
        updatePrice();
    }

    // Now, the form.price value should be updated with the calculated price

    form.patch('/clients/' + props.client.id)
}


</script>

<template>
    <Head title="Edit Client" />

    <AuthenticatedLayout>
        <div style="display: grid; place-content: center;">
            <div style="width: 750px; margin-top: 50px; display: grid; place-content: center;" class="bg-slate-200 p-5 text-center">
                <form @submit.prevent="submit">
                    <input style="width: 375px;" placeholder="Customer" required type="text" id="customer" v-model="form.customer" class="text-black mb-10">
                    <input style="width: 375px;" placeholder="Email" required type="email" id="email" v-model="form.email" class="text-black mb-10">
                    <input style="width: 375px;" placeholder="Address" required type="text" id="address" v-model="form.address" class="text-black mb-10">
                    <input style="width: 375px;" placeholder="Foods" required type="text" id="foods" v-model="form.foods" class="text-black mb-10">
                    <input style="width: 375px;" placeholder="Drinks" required type="text" id="drinks" v-model="form.drinks" class="text-black mb-10">
                    <input style="width: 375px;" placeholder="Price" required type="number" id="price" v-model="form.price" class="text-black mb-10">

                    <button style="width: 375px;" type="submit" class="bg-orange-500 text-white p-5">Update Order</button>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
