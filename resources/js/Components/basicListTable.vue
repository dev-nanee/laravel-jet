<template>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th v-for="(th, index) in ths" :key="index"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            >{{ th }}
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="info-for-search" v-for="(info, index) in infos" :key="index"
                            @click="getInfo()"
                            data-id="info['id']"
                        >
                            <td>
                                {{ index + 1 }}
                            </td>
                            <td v-for="( td, tdIndex ) in tds" :key="tdIndex"
                                class="px-6 py-4 whitespace-nowrap"
                            >
                                {{ info[td] }}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <input type="text" v-model="www">
                    <h1>{{ www }} // {{ getDateAndTime(todayDate) }} </h1>
                </div>
            </div>
        </div>
    </div>
    <paginator :paginator="paginator"/>
</template>
<script>
import Paginator from './Paginator';
import {dateFormat} from '../mixins/dateFormat';

export default {
    components: {
        Paginator
    },
    props: {
        "ths": Array,
        "tds": Array,
        "infos": Object,
        "paginator": Object
    },
    date(){
      return {
          todayDate: null,
          www: null
      }
    },
    created() {
        this.todayDate = new Date();
        console.log(this.todayDate);
        this.wwww = '안';
    },
    mounted() {
        this.todayDate = new Date();
        console.log(this.todayDate);
        console.log(this.www);
    },
    methods: {
        getInfo() {
            axios.edit('material/inspect/standard/' + this.getAttribute('data-id'))
                .then(function (res) {
                    existingObj.success = res.data.success;
                })
                .catch(function (err) {
                    existingObj.output = err;
                });
        },
    },
    mixins: [dateFormat]
}
</script>
