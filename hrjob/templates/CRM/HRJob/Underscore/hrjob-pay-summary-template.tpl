<script id="hrjob-pay-summary-template" type="text/template">
  <%- FieldOptions.pay_grade[pay_grade] %>
  {literal}<% if (pay_grade && pay_grade != 'unpaid') { %>{/literal}
  ( <%- FieldOptions.pay_currency[pay_currency] %> <span name="pay_amount"/> {ts}per{/ts} <%- FieldOptions.pay_unit[pay_unit] %>)
  {literal}<% } %>{/literal}
</script>