<?php
$topdir = "../../..";
$title = "MPI_T_cvar_handle_free(3) man page (version 4.1.8)";
$meta_desc = "Open MPI v4.1.8 man page: MPI_T_CVAR_HANDLE_FREE(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b><a href="../man3/MPI_T_cvar_handle_alloc.3.php">MPI_T_cvar_handle_alloc</a></b>, <b>MPI_T_cvar_handle_free</b> - Allocate/free
contol variable handles
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int <a href="../man3/MPI_T_cvar_handle_alloc.3.php">MPI_T_cvar_handle_alloc</a>(int cvar_index, void *obj_handle,
                            MPI_T_cvar_handle *handle, int *count)
int MPI_T_cvar_handle_free(MPI_T_cvar_handle *handle)
</pre>
<h2><a name='sect3' href='#toc3'>Description</a></h2>
<a href="../man3/MPI_T_cvar_handle_alloc.3.php">MPI_T_cvar_handle_alloc</a> binds the control variable specified
in <i>cvar_index</i> to the MPI object specified in <i>obj_handle</i>. If <a href="../man3/MPI_T_cvar_get_info.3.php">MPI_T_cvar_get_info</a>
returns MPI_T_BIND_NO_OBJECT as the binding of the variable the <i>obj_handle</i>
argument is ignored. The number of values represented by this control variable
is returned in the <i>count</i> parameter. If the control variable represents a
string then <i>count</i> will be the maximum length of the string.
<p> MPI_T_cvar_handle_free
frees a handle allocated by <a href="../man3/MPI_T_cvar_handle_alloc.3.php">MPI_T_cvar_handle_alloc</a> and sets the <i>handle</i>
argument to MPI_T_CVAR_HANDLE_NULL.
<p>
<p>
<h2><a name='sect4' href='#toc4'>Notes</a></h2>
Open MPI does not currently support
binding MPI objects to control variables so the <i>obj_handle</i> argument is
always ignored.
<p>
<p>
<h2><a name='sect5' href='#toc5'>Errors</a></h2>
<a href="../man3/MPI_T_cvar_handle_alloc.3.php">MPI_T_cvar_handle_alloc</a>() will fail if:
<dl>

<dt>[MPI_T_ERR_NOT_INITIALIZED]
</dt>
<dd>The MPI Tools interface not initialized </dd>

<dt>[MPI_T_ERR_INVALID_INDEX] </dt>
<dd>The control
variable index is invalid </dd>

<dt>[MPI_T_ERR_OUT_OF_HANDLES] </dt>
<dd>No more handles available
</dd>

<dt>MPI_T_cvar_handle_free() will fail if: </dt>
<dd></dd>

<dt>[MPI_T_ERR_NOT_INITIALIZED] </dt>
<dd>The
MPI Tools interface not initialized </dd>

<dt>[MPI_T_ERR_INVALID_HANDLE] </dt>
<dd>The handle

<p>is invalid
<p>
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>See Also</a></h2>
<br>
<pre><a href="../man3/MPI_T_cvar_get_info.3.php">MPI_T_cvar_get_info</a>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
