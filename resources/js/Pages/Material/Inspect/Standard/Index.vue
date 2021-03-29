<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        수입검사 기준 등록
      </h2>
    </template>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <basic-list-table :ths="ths" :tds="tds" :infos="infos" :paginator="paginator"/>
          <edit-form/>
        </div>
      </div>
    </div>
  </app-layout>
</template>
<script>
import AppLayout from '@/Layouts/AppLayout'
import ListView from './ListView';
import EditForm from './EditForm';
import BasicListTable from '../../../../Components/basicListTable';
export default {
  props: ['ths', 'tds', 'infos', 'paginator'],
  components: {BasicListTable, AppLayout, EditForm, ListView},
}
</script>