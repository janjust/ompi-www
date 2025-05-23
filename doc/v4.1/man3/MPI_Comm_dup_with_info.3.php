<?php
$topdir = "../../..";
$title = "MPI_Comm_dup_with_info(3) man page (version 4.1.8)";
$meta_desc = "Open MPI v4.1.8 man page: MPI_COMM_DUP_WITH_INFO(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Comm_dup_with_info </b> -  Duplicates an existing communicator
using provided info.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Comm_dup_with_info(MPI_Comm comm, MPI_Info info, MPI_Comm *newcomm)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>USE MPI
! or the older form: INCLUDE &rsquo;mpif.h&rsquo;
MPI_COMM_DUP_WITH_INFO(COMM, INFO, NEWCOMM, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COMM, INFO, NEWCOMM, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>Fortran 2008 Syntax</a></h2>
<br>
<pre>USE mpi_f08
MPI_Comm_dup_with_info(comm, info, newcomm, ierror)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(MPI_Comm), INTENT(IN) :: comm
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(MPI_Info), INTENT(IN) :: info
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(MPI_Comm), INTENT(OUT) :: newcomm
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER, OPTIONAL, INTENT(OUT) :: ierror
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameter</a></h2>

<dl>

<dt>comm </dt>
<dd>Communicator (handle). </dd>

<dt>info </dt>
<dd>Info argument (handle).
<p>
</dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>newcomm </dt>
<dd>Copy of comm (handle). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error
status (integer).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
MPI_Comm_dup_with_info acts exactly like <a href="../man3/MPI_Comm_dup.3.php">MPI_Comm_dup</a>
except that the info hints associated with the communicator <i>comm</i> are not
duplicated in <i>newcomm</i>. The hints provided by the argument <i>info</i> are associated
with the output communicator <i>newcomm</i> instead. <p>
See <i><b><a href="../man3/MPI_Comm_set_info.3.php">MPI_Comm_set_info</a></b>(3)</i> for
the list of recognized info keys.
<p>
<h2><a name='sect8' href='#toc8'>Notes</a></h2>
This operation is used to provide
a parallel library call with a duplicate communication space that has the
same properties as the original communicator. This includes any attributes
(see below) and topologies (see Chapter 6, "Process Topologies," in the
MPI-1 Standard). This call is valid even if there are pending point-to-point
communications involving the communicator comm. A typical call might involve
an MPI_Comm_dup_with_info at the beginning of the parallel call, and an
<a href="../man3/MPI_Comm_free.3.php">MPI_Comm_free</a> of that duplicated communicator at the end of the call. Other
models of communicator management are also possible. <p>
This call applies to
both intra- and intercommunicators.
<p> Note that it is not defined by the MPI
standard what happens if the attribute copy callback invokes other MPI
functions.  In Open MPI, it is not valid for attribute copy callbacks (or
any of their children) to add or delete attributes on the same object on
which the attribute copy callback is being invoked.
<p>
<h2><a name='sect9' href='#toc9'>Errors</a></h2>
Almost all MPI
routines return an error value; C routines as the value of the function
and Fortran routines in the last argument. <p>
Before the error value is returned,
the current MPI error handler is called. By default, this error handler
aborts the MPI job, except for I/O function errors. The error handler may
be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
may be used to cause error values to be returned. Note that MPI does not
guarantee that an MPI program can continue past an error.
<p>
<h2><a name='sect10' href='#toc10'>See Also</a></h2>
<a href="../man3/MPI_Comm_dup.3.php">MPI_Comm_dup</a>
<a href="../man3/MPI_Comm_idup.3.php">MPI_Comm_idup</a> <a href="../man3/MPI_Comm_set_info.3.php">MPI_Comm_set_info</a> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>Fortran 2008 Syntax</a></li>
<li><a name='toc5' href='#sect5'>Input Parameter</a></li>
<li><a name='toc6' href='#sect6'>Output Parameters</a></li>
<li><a name='toc7' href='#sect7'>Description</a></li>
<li><a name='toc8' href='#sect8'>Notes</a></li>
<li><a name='toc9' href='#sect9'>Errors</a></li>
<li><a name='toc10' href='#sect10'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
