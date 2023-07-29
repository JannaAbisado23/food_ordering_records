<template>

    <Head title="Clients" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg text-white" style="font-size: 40px;">
                    <div>
                        <div>
                            <input type="text" @keydown.enter="search($event)" name="" id="" class="mb-10 text-black border-0 shadow-2xl" style="border-bottom: 1px solid black; background-color: transparent;" placeholder="Search Customer">
                            <Link href="/clients/create" class="mt-4 bg-orange-500 text-slate-200 p-3 float-right" style="font-size: 20px;">Add Order</Link>
                        </div>
                        <div class="flex flex-wrap">
                            <div v-for="client in clients" :key="client.id">
                                <ClientCard :client="client" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>

</template>

<script setup>
import { computed } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ClientCard from '@/Components/ClientCard.vue';
import { Head, Link, router } from '@inertiajs/vue3';

const props = defineProps({
    clients: Array
})

function search(e) {
    router.visit('/clients/search/' + e.target.value, {
        only: ['clients']
    })
}

const clientCount = computed(() => props.clients.length);

</script>

<style>
    .res_btn{
        background-color: green;
        color: white;
        border-radius: 20px;
        padding: 10px;

    }
</style>
