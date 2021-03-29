<template>
    <div class="py-12">
        <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
            기준 정보
        </div>
        <div style='border-bottom: 2px solid #eaeaea'>
            <ul class='flex cursor-pointer'>
                <li class='py-2 px-6 bg-white rounded-t-lg'>Personal</li>
                <li class='py-2 px-6 bg-white rounded-t-lg text-gray-500 bg-gray-200'>Akun</li>
                <li class='py-2 px-6 bg-white rounded-t-lg text-gray-500 bg-gray-200'>Pengaturan</li>
            </ul>
        </div>
        <file-upload-component></file-upload-component>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="weight-use" value="1">
                중량검사 사용 유무
                <span class="form-check-sign"><span class="check"></span></span>
            </label>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="weight-sample-qty">샘플 수</label>
                <input type="number" class="form-control" name="weight-sample-amount"
                       id="weight-sample-qty">
            </div>
            <div class="form-group col-md-5">
                <label for="weight-position-count">소수점 자릿수</label>
                <input type="number" class="form-control" name="weight-decimal-point-amount"
                       id="weight-position-count" placeholder="소수점 자리수">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="weight-maximum">규격 상한</label>
                <input type="number" class="form-control" name="weight-maximum"
                       id="weight-maximum" placeholder="규격 상한">
            </div>
            <div class="form-group col-md-3">
                <label for="weight-standard">규격</label>
                <input type="number" class="form-control" name="weight-standard"
                       id="weight-standard" placeholder="규격">
            </div>
            <div class="form-group col-md-3">
                <label for="weight-minimum">규격 하한</label>
                <input type="number" class="form-control" name="weight-minimum"
                       id="weight-minimum" placeholder="규격 하한">
            </div>
        </div>
    </div>
</template>
<script>
import FileUploadComponent from "../../../../Components/FileUploadComponent";

export default {
    components: {FileUploadComponent}
};
</script>
