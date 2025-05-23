<?php
$topdir = "../../..";
$title = "MPI_Type_contiguous(3) man page (version 3.1.6)";
$meta_desc = "Open MPI v3.1.6 man page: MPI_TYPE_CONTIGUOUS(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
     <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Type_contiguous</b> - Creates a contiguous datatype.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Type_contiguous(int count, MPI_Datatype oldtype,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Datatype *newtype)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>USE MPI
! or the older form: INCLUDE &rsquo;mpif.h&rsquo;
MPI_TYPE_CONTIGUOUS(COUNT, OLDTYPE, NEWTYPE, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COUNT, OLDTYPE, NEWTYPE, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>Fortran 2008 Syntax</a></h2>
<br>
<pre>USE mpi_f08
MPI_Type_contiguous(count, oldtype, newtype, ierror)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER, INTENT(IN) :: count
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(MPI_Datatype), INTENT(IN) :: oldtype
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(MPI_Datatype), INTENT(OUT) :: newtype
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER, OPTIONAL, INTENT(OUT) :: ierror
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>count </dt>
<dd>Replication count (nonnegative integer). </dd>

<dt>oldtype </dt>
<dd>Old
datatype (handle). <p>
</dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>newtype </dt>
<dd>New datatype (handle). </dd>

<dt>IERROR
</dt>
<dd>Fortran only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
The simplest datatype
constructor is MPI_Type_contiguous, which allows replication of a datatype
into contiguous locations. <p>
<i>newtype</i> is the datatype obtained by concatenating
<i>count</i> copies of <i>oldtype</i>. Concatenation is defined using the extent of <i>oldtype</i>
as the size of the concatenated copies. <p>
<b>Example:</b> Let oldtype have type map
{(double, 0), (char, 8)}, with extent 16, and let count = 3. The type map
of the datatype returned by newtype is <p>
<br>
<pre>    {(double, 0), (char, 8), (double, 16), (char, 24),
    (double, 32), (char, 40)];
</pre><p>
i.e., alternating double and char elements, with displacements 0, 8, 16,
24, 32, 40. <p>
In general, assume that the type map of oldtype is <p>
<br>
<pre>    {(type(0), disp(0)),...,(type(n-1), disp(n-1))},
</pre><p>
with extent ex. Then newtype has a type map with count times n entries defined
by: <p>
<br>
<pre>    {(type(0), disp(0)), ...,(type(n-1), disp(n-1)),
    (type(0), disp(0) + ex), ...,(type(n-1),
    disp(n-1) + ex), ...,(type(0), disp(0) + ex * (count - 1)),
    ...,(type(n-1), disp(n-1) + ex * (count - 1))}.
</pre><p>
For more information about derived datatypes, see Section 3.12 of the MPI-1
Standard.
<p>
<h2><a name='sect8' href='#toc8'>Errors</a></h2>
Almost all MPI routines return an error value; C routines
as the value of the function and Fortran routines in the last argument.
C++ functions do not return errors. If the default error handler is set
to MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
will be used to throw an MPI::Exception object. <p>
Before the error value is
returned, the current MPI error handler is called. By default, this error
handler aborts the MPI job, except for I/O function errors. The error handler
may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler
MPI_ERRORS_RETURN may be used to cause error values to be returned. Note
that MPI does not guarantee that an MPI program can continue past an error.

<p> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>Fortran 2008 Syntax</a></li>
<li><a name='toc5' href='#sect5'>Input Parameters</a></li>
<li><a name='toc6' href='#sect6'>Output Parameters</a></li>
<li><a name='toc7' href='#sect7'>Description</a></li>
<li><a name='toc8' href='#sect8'>Errors</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
