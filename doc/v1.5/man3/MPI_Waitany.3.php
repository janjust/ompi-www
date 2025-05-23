<?php
$topdir = "../../..";
$title = "MPI_Waitany(3) man page (version 1.5.5)";
$meta_desc = "Open MPI v1.5.5 man page: MPI_WAITANY(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
  <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Waitany</b> - Waits for any specified send or receive to complete.

<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Waitany(int count, MPI_Request *array_of_requests,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;int *index, MPI_Status *status)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_WAITANY(COUNT, ARRAY_OF_REQUESTS, INDEX, STATUS, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COUNT, ARRAY_OF_REQUESTS(*), INDEX
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;STATUS(MPI_STATUS_SIZE), IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
static int Request::Waitany(int count, Request
<tt> </tt>&nbsp;<tt> </tt>&nbsp;array_of_requests[], Status&amp; status)
static int Request::Waitany(int count, Request array_of_requests[])
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>count       </dt>
<dd>List length (integer). </dd>

<dt>array_of_requests </dt>
<dd>Array
of requests (array of handles). <p>

<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>index       </dt>
<dd>Index of handle
for operation that completed (integer). In the range 0 to count-1.  In Fortran,
the range is 1 to count. </dd>

<dt>status       </dt>
<dd>Status object (status). <p>
</dd>

<dt>IERROR </dt>
<dd>Fortran
only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
A call to MPI_Waitany can be
used to wait for the completion of one out of several requests.  <p>
The array_of_requests
list may contain null or inactive handles. If the list contains no active
handles (list has length zero or all entries are null or inactive), then
the call returns immediately with index = MPI_UNDEFINED, and an empty status.
 <p>
The execution of MPI_Waitany(count, array_of_requests, index, status)
has the same effect as the execution of <a href="../man3/MPI_Wait.3.php">MPI_Wait</a>(&amp;array_of_requests[i],
status), where i is the value returned by index (unless the value of index
is MPI_UNDEFINED). MPI_Waitany with an array containing one active entry
is equivalent to <a href="../man3/MPI_Wait.3.php">MPI_Wait</a>. <p>
If your application does not need to examine
the <i>status</i> field, you can save resources by using the predefined constant
MPI_STATUS_IGNORE as a special value for the <i>status</i> argument.  <p>
<b>Example:</b>
Client-server code (starvation can occur).  <p>
<br>
<pre>    CALL <a href="../man3/MPI_Comm_size.3.php">MPI_COMM_SIZE</a>(comm, size, ierr)
    CALL <a href="../man3/MPI_Comm_rank.3.php">MPI_COMM_RANK</a>(comm, rank, ierr)
    IF(rank .GT 0) THEN         ! client code
        DO WHILE(.TRUE.)
           CALL <a href="../man3/MPI_Isend.3.php">MPI_ISEND</a>(a, n, MPI_REAL, 0, tag, comm, request, ierr)

           CALL <a href="../man3/MPI_Wait.3.php">MPI_WAIT</a>(request, status, ierr)
        END DO
    ELSE         ! rank=0 -- server code
           DO i=1, size-1
              CALL <a href="../man3/MPI_Irecv.3.php">MPI_IRECV</a>(a(1,i), n, MPI_REAL, i tag,
                       comm, request_list(i), ierr)
           END DO
           DO WHILE(.TRUE.)
              CALL MPI_WAITANY(size-1, request_list, index, status, ierr)

              CALL DO_SERVICE(a(1,index))  ! handle one message
              CALL <a href="../man3/MPI_Irecv.3.php">MPI_IRECV</a>(a(1, index), n, MPI_REAL, index, tag,
                        comm, request_list(index), ierr)
           END DO
    END IF
</pre><p>

<p>
<h2><a name='sect8' href='#toc8'>Errors</a></h2>
Almost all MPI routines return an error value; C routines as the
value of the function and Fortran routines in the last argument. C++ functions
do not return errors. If the default error handler is set to MPI::ERRORS_THROW_EXCEPTIONS,
then on error the C++ exception mechanism will be used to throw an MPI::Exception
object. <p>
Before the error value is returned, the current MPI error handler
is called. By default, this error handler aborts the MPI job, except for
I/O function errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>,
<a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>, or <a href="../man3/MPI_Win_set_errhandler.3.php">MPI_Win_set_errhandler</a> (depending on the type
of MPI handle that generated the request); the predefined error handler
MPI_ERRORS_RETURN may be used to cause error values to be returned. Note
that MPI does not guarantee that an MPI program can continue past an error.
<p>
Note that per MPI-1 section 3.2.5, MPI exceptions on requests passed to MPI_WAITANY
do not set the status.MPI_ERROR field in the returned status.  The error
code is passed to the back-end error handler and may be passed back to the
caller through the return value of MPI_WAITANY if the back-end error handler
returns it.  The pre-defined MPI error handler MPI_ERRORS_RETURN exhibits
this behavior, for example.
<p>
<h2><a name='sect9' href='#toc9'>See Also</a></h2>
<p>
<a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a> <br>
<a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a> <br>
<a href="../man3/MPI_Test.3.php">MPI_Test</a> <br>
<a href="../man3/MPI_Testall.3.php">MPI_Testall</a> <br>
<a href="../man3/MPI_Testany.3.php">MPI_Testany</a> <br>
<a href="../man3/MPI_Testsome.3.php">MPI_Testsome</a> <br>
<a href="../man3/MPI_Wait.3.php">MPI_Wait</a> <br>
<a href="../man3/MPI_Waitall.3.php">MPI_Waitall</a> <br>
<a href="../man3/MPI_Waitsome.3.php">MPI_Waitsome</a> <br>
<a href="../man3/MPI_Win_set_errhandler.3.php">MPI_Win_set_errhandler</a> <br>

<p> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>C++ Syntax</a></li>
<li><a name='toc5' href='#sect5'>Input Parameters</a></li>
<li><a name='toc6' href='#sect6'>Output Parameters</a></li>
<li><a name='toc7' href='#sect7'>Description</a></li>
<li><a name='toc8' href='#sect8'>Errors</a></li>
<li><a name='toc9' href='#sect9'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
