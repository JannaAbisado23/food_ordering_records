<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    email: '',
    customer: '',
    address: '',
    foods: '',
    drinks: '',
    price: '',
    pic: null
});

function submit() {

    form.post('/clients/');
}

</script>

<template>
    <Head title="Create Client" />
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
                    <div class="text-white" style="display: grid; place-content: center;">
                        <div class="bg-slate-500 hover:bg-slate-400 duration-200 p-10 rounded-lg">
                            <h1>Choose Order Photo</h1>
                        </div>
                        <input style="opacity: 0; cursor: pointer; margin-bottom: -75px; transform: translateY(-100px); height: 100px;" required type="file" @input="form.pic = $event.target.files[0]" accept="image/png" />
                    </div>
                    <button style="width: 375px;" type="submit" class="bg-orange-500 text-white p-5">Add Order</button>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
