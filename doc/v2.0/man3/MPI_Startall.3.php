<?php
$topdir = "../../..";
$title = "MPI_Startall(3) man page (version 2.0.4)";
$meta_desc = "Open MPI v2.0.4 man page: MPI_STARTALL(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
     <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Startall</b> - Starts a collection of requests.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Startall(int count, MPI_Request array_of_requests[])
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_STARTALL(COUNT, ARRAY_OF_REQUESTS, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COUNT, ARRAY_OF_REQUESTS(*), IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
static void Prequest::Startall(int count, Prequest array_of_requests[])
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameter</a></h2>

<dl>

<dt>count </dt>
<dd>List length (integer).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Input/Output Parameter</a></h2>

<dl>

<dt>array_of_requests
</dt>
<dd>Array of requests (array of handle).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Output Parameter</a></h2>

<dl>

<dt>IERROR </dt>
<dd>Fortran only:
Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect8' href='#toc8'>Description</a></h2>
Starts all communications associated
with requests in array_of_requests. A call to  MPI_Startall(count, array_of_requests)
has the same effect as calls to <a href="../man3/MPI_Start.3.php">MPI_Start</a> (&amp;array_of_requests[i]), executed
for i=0 ,..., count-1, in some arbitrary order. <p>
A communication started with
a call to <a href="../man3/MPI_Start.3.php">MPI_Start</a> or MPI_Startall is completed by a call to <a href="../man3/MPI_Wait.3.php">MPI_Wait</a>,
<a href="../man3/MPI_Test.3.php">MPI_Test</a>, or one of the derived functions <a href="../man3/MPI_Waitany.3.php">MPI_Waitany</a>, <a href="../man3/MPI_Testany.3.php">MPI_Testany</a>, <a href="../man3/MPI_Waitall.3.php">MPI_Waitall</a>,
<a href="../man3/MPI_Testall.3.php">MPI_Testall</a>, <a href="../man3/MPI_Waitsome.3.php">MPI_Waitsome</a>, <a href="../man3/MPI_Testsome.3.php">MPI_Testsome</a> (these are described in Section
3.7.5 of the MPI-1 Standard, "Multiple Completions"). The request becomes inactive
after successful completion by such a call. The request is not deallocated,
and it can be activated anew by another <a href="../man3/MPI_Start.3.php">MPI_Start</a> or MPI_Startall call.
<p>
A persistent request is deallocated by a call to <a href="../man3/MPI_Request_free.3.php">MPI_Request_free</a> (see
Section 3.7.3  of the MPI-1 Standard, "Communication Completion"). <p>
The call
to <a href="../man3/MPI_Request_free.3.php">MPI_Request_free</a> can occur at any point in the program after the persistent
request was created. However, the request will be deallocated only after
it becomes inactive. Active receive requests should not be freed. Otherwise,
it will not be possible to check that the receive has completed. It is preferable,
in general, to free requests when they are inactive. If this rule is followed,
then the persistent communication request functions will be invoked in
a sequence of the form, <br>
<p>
    Create (Start Complete)* Free<br>
 <br>
<p>
where * indicates zero or more repetitions. If the same communication object
is used in several concurrent threads, it is the user&rsquo;s responsibility to
coordinate calls so that the correct sequence is obeyed. <p>
A send operation
initiated with <a href="../man3/MPI_Start.3.php">MPI_Start</a> can be matched with any receive operation and,
likewise, a receive operation initiated with <a href="../man3/MPI_Start.3.php">MPI_Start</a> can receive messages
generated by any send operation.
<p>
<h2><a name='sect9' href='#toc9'>Errors</a></h2>
Almost all MPI routines return an
error value; C routines as the value of the function and Fortran routines
in the last argument. C++ functions do not return errors. If the default
error handler is set to MPI::ERRORS_THROW_EXCEPTIONS, then on error the
C++ exception mechanism will be used to throw an MPI::Exception object.
<p>
Before the error value is returned, the current MPI error handler is called.
By default, this error handler aborts the MPI job, except for I/O function
errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the
predefined error handler MPI_ERRORS_RETURN may be used to cause error values
to be returned. Note that MPI does not guarantee that an MPI program can
continue past an error.
<p>
<h2><a name='sect10' href='#toc10'>See Also</a></h2>
<p>
<a href="../man3/MPI_Bsend_init.3.php">MPI_Bsend_init</a> <br>
<a href="../man3/MPI_Rsend_init.3.php">MPI_Rsend_init</a> <br>
<a href="../man3/MPI_Send_init.3.php">MPI_Send_init</a> <br>
<a href="../man3/MPI_Ssend_init.3.php">MPI_Ssend_init</a> <br>
<a href="../man3/MPI_Recv_init.3.php">MPI_Recv_init</a> <br>
<a href="../man3/MPI_Start.3.php">MPI_Start</a> <br>

<p><a href="../man3/MPI_Request_free.3.php">MPI_Request_free</a>
<p>
<p> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>C++ Syntax</a></li>
<li><a name='toc5' href='#sect5'>Input Parameter</a></li>
<li><a name='toc6' href='#sect6'>Input/Output Parameter</a></li>
<li><a name='toc7' href='#sect7'>Output Parameter</a></li>
<li><a name='toc8' href='#sect8'>Description</a></li>
<li><a name='toc9' href='#sect9'>Errors</a></li>
<li><a name='toc10' href='#sect10'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
