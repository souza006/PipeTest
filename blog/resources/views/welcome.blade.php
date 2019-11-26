@extends('layout')

@section('content')
<div class="jumbotron">
  <h1>PHP Outlook Sample</h1>
  <p>This example shows how to get an OAuth token from Azure using the <a href="https://docs.microsoft.com/azure/active-directory/develop/active-directory-v2-protocols-oauth-code" target="_blank">authorization code grant flow</a> and to use that token to make calls to the Outlook APIs in the <a href="https://docs.microsoft.com/graph/overview" target="_blank">Microsoft Graph</a>.</p>
  <p>
    <a class="btn btn-lg btn-primary" href="/signin" role="button" id="connect-button">Connect to Outlook</a>
  </p>
</div>


<!--<script type="text/javascript">
	var href = 'https://login.microsoftonline.com/common/oauth2/authorize?response_type=token&client_id=';
href += client_id + '&resource=https://webdir.online.lync.com&redirect_uri=' + window.location.href;
window.location.href = href;
</script>-->
@endsection
