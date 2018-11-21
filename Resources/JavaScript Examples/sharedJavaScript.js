function submitter(form)
{
   if (confirm('Once you choose Ok, your form will be sent'))
   {
      form.submit();
   }
   else
   {
      alert('Cancelling form submission.')
   }
}