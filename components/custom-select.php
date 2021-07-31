<!-- <div class="customized-select d-inline-block">
  <div class="customized-select__container right">
    <label>
      <strong>MUNICIPALITY</strong>
      <select>
        <option value="">Select</option>
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="40">40</option>
        <option value="60">60</option>
        <option value="100">100</option>
        <option value="200">200</option>
      </select>

      <span class="pointer"></span>
    </label>
  </div>
</div> -->

<div class="customized-select">
  <div class="d-flex align-items-center">
    <strong class="text-center px-2">MUNICIPALITY</strong>
    <select class="select2js pl-3 w-100" name="month">
      <option value="junio">Select</option>
      <option value="agosto">AGOSTO</option>
    </select>
  </div>
</div>




<script>
  $('.select2js').select({
    minimumResultsForSearch: 'Infinity'
  })
</script>