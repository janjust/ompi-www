<?php
$topdir = "../../..";
$title = "MPI_Comm_delete_attr(3) man page (version 3.1.6)";
$meta_desc = "Open MPI v3.1.6 man page: MPI_COMM_DELETE_ATTR(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
     <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Comm_delete_attr</b> - Deletes attribute value associated with
a key.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Comm_delete_attr(MPI_Comm comm, int comm_keyval)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>USE MPI
! or the older form: INCLUDE &rsquo;mpif.h&rsquo;
MPI_COMM_DELETE_ATTR(COMM, COMM_KEYVAL, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COMM, COMM_KEYVAL, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>Fortran 2008 Syntax</a></h2>
<br>
<pre>USE mpi_f08
MPI_Comm_delete_attr(comm, comm_keyval, ierror)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(MPI_Comm), INTENT(IN) :: comm
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER, INTENT(IN) :: comm_keyval
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER, OPTIONAL, INTENT(OUT) :: ierror
</pre>
<h2><a name='sect5' href='#toc5'>Input/Output Parameter</a></h2>

<dl>

<dt>comm </dt>
<dd>Communicator from which the attribute is deleted
(handle).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Input Parameter</a></h2>

<dl>

<dt>comm_keyval </dt>
<dd>Key value (integer).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Output Parameter</a></h2>

<dl>

<dt>IERROR
</dt>
<dd>Fortran only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect8' href='#toc8'>Description</a></h2>
MPI_Comm_delete_attr deletes
an attribute from cache by key. This function invokes the attribute delete
function delete_fn specified when the <i>comm_keyval</i> was created. The call
will fail if the delete_fn function returns an error code other than MPI_SUCCESS.

<p> Whenever a communicator is replicated using the function <a href="../man3/MPI_Comm_dup.3.php">MPI_Comm_dup</a>,
all callback copy functions for attributes that are currently set are invoked
(in arbitrary order). Whenever a communicator is deleted using the function
<a href="../man3/MPI_Comm_free.3.php">MPI_Comm_free</a>, all callback delete functions for attributes that are currently
set are invoked. <p>
This function is the same as <a href="../man3/MPI_Attr_delete.3.php">MPI_Attr_delete</a> but is needed
to match the communicator-specific functions introduced in the MPI-2 standard.
The use of <a href="../man3/MPI_Attr_delete.3.php">MPI_Attr_delete</a> is deprecated.
<p>
<p>
<h2><a name='sect9' href='#toc9'>Notes</a></h2>
Note that it is not defined
by the MPI standard what happens if the delete_fn callback invokes other
MPI functions.  In Open MPI, it is not valid for delete_fn callbacks (or
any of their children) to add or delete attributes on the same object on
which the delete_fn callback is being invoked.
<p>
<p>
<h2><a name='sect10' href='#toc10'>Errors</a></h2>
Almost all MPI routines
return an error value; C routines as the value of the function and Fortran
routines in the last argument. C++ functions do not return errors. If the
default error handler is set to MPI::ERRORS_THROW_EXCEPTIONS, then on error
the C++ exception mechanism will be used to throw an MPI::Exception object.
<p>
Before the error value is returned, the current MPI error handler is called.
By default, this error handler aborts the MPI job, except for I/O function
errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the
predefined error handler MPI_ERRORS_RETURN may be used to cause error values
to be returned. Note that MPI does not guarantee that an MPI program can
continue past an error.
<p> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>Fortran 2008 Syntax</a></li>
<li><a name='toc5' href='#sect5'>Input/Output Parameter</a></li>
<li><a name='toc6' href='#sect6'>Input Parameter</a></li>
<li><a name='toc7' href='#sect7'>Output Parameter</a></li>
<li><a name='toc8' href='#sect8'>Description</a></li>
<li><a name='toc9' href='#sect9'>Notes</a></li>
<li><a name='toc10' href='#sect10'>Errors</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
