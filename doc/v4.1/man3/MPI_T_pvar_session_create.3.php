<?php
$topdir = "../../..";
$title = "MPI_T_pvar_session_create(3) man page (version 4.1.8)";
$meta_desc = "Open MPI v4.1.8 man page: MPI_T_PVAR_SESSION_CREATE(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_T_pvar_session_create</b>, <b><a href="../man3/MPI_T_pvar_session_free.3.php">MPI_T_pvar_session_free</a></b> - Create/free
performance variable session
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_T_pvar_session_create(MPI_T_pvar_session *session)
int <a href="../man3/MPI_T_pvar_session_free.3.php">MPI_T_pvar_session_free</a>(MPI_T_pvar_session *session)
</pre>
<h2><a name='sect3' href='#toc3'>Description</a></h2>
MPI_T_pvar_session_create creates a session for accessing performance
variables. The new session is returned in the <i>session</i> parameter.
<p> <a href="../man3/MPI_T_pvar_session_free.3.php">MPI_T_pvar_session_free</a>
releases a session allocated by MPI_T_pvar_session_create and sets the
<i>session</i> parameter to MPI_T_PVAR_SESSION_NULL.
<p>
<h2><a name='sect4' href='#toc4'>Errors</a></h2>
MPI_T_pvar_session_create()
will fail if:
<dl>

<dt>[MPI_T_ERR_NOT_INITIALIZED] </dt>
<dd>The MPI Tools interface not initialized
</dd>

<dt>[MPI_T_ERR_MEMORY] </dt>
<dd>Out of memory </dd>

<dt>[MPI_T_ERR_OUT_OF_SESSIONS] </dt>
<dd>No more sessions
available </dd>

<dt><a href="../man3/MPI_T_pvar_session_free.3.php">MPI_T_pvar_session_free</a>() will fail if: </dt>
<dd></dd>

<dt>[MPI_T_ERR_NOT_INITIALIZED]
</dt>
<dd>The MPI Tools interface not initialized </dd>

<dt>[MPI_T_ERR_INVALID_SESSION] </dt>
<dd>The

<p>session parameter is not a valid session
<p> </dd>
</dl>
<p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Description</a></li>
<li><a name='toc4' href='#sect4'>Errors</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
