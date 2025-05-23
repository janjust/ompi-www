<?php
$topdir = "../../..";
$title = "MPI_Scatter(3) man page (version 4.0.7)";
$meta_desc = "Open MPI v4.0.7 man page: MPI_SCATTER(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Scatter, <a href="../man3/MPI_Iscatter.3.php">MPI_Iscatter</a></b> - Sends data from one task to all tasks
in a group.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Scatter(const void *sendbuf, int sendcount, MPI_Datatype sendtype,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;void *recvbuf, int recvcount, MPI_Datatype recvtype, int root,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Comm comm)
int <a href="../man3/MPI_Iscatter.3.php">MPI_Iscatter</a>(const void *sendbuf, int sendcount, MPI_Datatype sendtype,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;void *recvbuf, int recvcount, MPI_Datatype recvtype, int root,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Comm comm, MPI_Request *request)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>USE MPI
! or the older form: INCLUDE &rsquo;mpif.h&rsquo;
MPI_SCATTER(SENDBUF, SENDCOUNT, SENDTYPE, RECVBUF, RECVCOUNT,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;RECVTYPE, ROOT, COMM, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;&lt;type&gt;<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDBUF(*), RECVBUF(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDCOUNT, SENDTYPE, RECVCOUNT, RECVTYPE, ROOT
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COMM, IERROR
<a href="../man3/MPI_Iscatter.3.php">MPI_ISCATTER</a>(SENDBUF, SENDCOUNT, SENDTYPE, RECVBUF, RECVCOUNT,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;RECVTYPE, ROOT, COMM, REQUEST, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;&lt;type&gt;<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDBUF(*), RECVBUF(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDCOUNT, SENDTYPE, RECVCOUNT, RECVTYPE, ROOT
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COMM, REQUEST, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>Fortran 2008 Syntax</a></h2>
<br>
<pre>USE mpi_f08
MPI_Scatter(sendbuf, sendcount, sendtype, recvbuf, recvcount, recvtype,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;root, comm, ierror)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(*), DIMENSION(..), INTENT(IN) :: sendbuf
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(*), DIMENSION(..) :: recvbuf
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER, INTENT(IN) :: sendcount, recvcount, root
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(MPI_Datatype), INTENT(IN) :: sendtype, recvtype
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(MPI_Comm), INTENT(IN) :: comm
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER, OPTIONAL, INTENT(OUT) :: ierror
<a href="../man3/MPI_Iscatter.3.php">MPI_Iscatter</a>(sendbuf, sendcount, sendtype, recvbuf, recvcount, recvtype,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;root, comm, request, ierror)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(*), DIMENSION(..), INTENT(IN), ASYNCHRONOUS :: sendbuf
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(*), DIMENSION(..), ASYNCHRONOUS :: recvbuf
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER, INTENT(IN) :: sendcount, recvcount, root
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(MPI_Datatype), INTENT(IN) :: sendtype, recvtype
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(MPI_Comm), INTENT(IN) :: comm
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(MPI_Request), INTENT(OUT) :: request
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER, OPTIONAL, INTENT(OUT) :: ierror
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>sendbuf </dt>
<dd>Address of send buffer (choice, significant only
at root). </dd>

<dt>sendcount </dt>
<dd>Number of elements sent to each process (integer, significant
only at root). </dd>

<dt>sendtype </dt>
<dd>Datatype of send buffer elements (handle, significant
only at root). </dd>

<dt>recvcount </dt>
<dd>Number of elements in receive buffer (integer).
</dd>

<dt>recvtype </dt>
<dd>Datatype of receive buffer elements (handle). </dd>

<dt>root </dt>
<dd>Rank of sending
process (integer). </dd>

<dt>comm </dt>
<dd>Communicator (handle).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>recvbuf
</dt>
<dd>Address of receive buffer (choice). </dd>

<dt>request </dt>
<dd>Request (handle, non-blocking
only). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
MPI_Scatter
is the inverse operation to <a href="../man3/MPI_Gather.3.php">MPI_Gather</a>. <p>
The outcome is as if the root executed
n send operations, <p>
<br>
<pre>    <a href="../man3/MPI_Send.3.php">MPI_Send</a>(sendbuf + i * sendcount * extent(sendtype), sendcount,
             sendtype, i, ...)
</pre><p>
and each process executed a receive, <p>
<br>
<pre>    <a href="../man3/MPI_Recv.3.php">MPI_Recv</a>(recvbuf, recvcount, recvtype, i, ...).
</pre><p>
An alternative description is that the root sends a message with <a href="../man3/MPI_Send.3.php">MPI_Send</a>(<i>sendbuf</i>,
<i>sendcount</i> * <i>n</i>,&nbsp;<i>sendtype</i>, ...). This message is split into <i>n</i> equal segments,
the ith segment is sent to the ith process in the group, and each process
receives this message as above. <p>
The send buffer is ignored for all nonroot
processes. <p>
The type signature associated with <i>sendcount</i>, <i>sendtype</i> at the
root must be equal to the type signature associated with <i>recvcount</i>, <i>recvtype</i>
at all processes (however, the type maps may be different). This implies
that the amount of data sent must be equal to the amount of data received,
pairwise between each process and the root. Distinct type maps between sender
and receiver are still allowed. <p>
All arguments to the function are significant
on process <i>root</i>, while on other processes, only arguments <i>recvbuf</i>, <i>recvcount</i>,
<i>recvtype</i>, <i>root</i>, <i>comm</i> are significant. The arguments <i>root</i> and <i>comm</i> must have
identical values on all processes. <p>
The specification of counts and types
should not cause any location on the root to be read more than once. <p>
<b>Rationale:</b>
Though not needed, the last restriction is imposed so as to achieve symmetry
with <a href="../man3/MPI_Gather.3.php">MPI_Gather</a>, where the corresponding restriction (a multiple-write restriction)
is necessary. <p>
<b>Example:</b> The reverse of Example 1 in the <a href="../man3/MPI_Gather.3.php">MPI_Gather</a> manpage.
Scatter sets of 100 ints from the root to each process in the group. <p>
<br>
<pre>        MPI_Comm comm;
        int gsize,*sendbuf;
        int root, rbuf[100];
        ...
        <a href="../man3/MPI_Comm_size.3.php">MPI_Comm_size</a>(comm, &amp;gsize);
        sendbuf = (int *)malloc(gsize*100*sizeof(int));
        ...
        MPI_Scatter(sendbuf, 100, MPI_INT, rbuf, 100,
                    MPI_INT, root, comm);
</pre>
<p>
<h2><a name='sect8' href='#toc8'>Use of In-place Option</a></h2>
When the communicator is an intracommunicator, you
can perform a scatter operation in-place (the output buffer is used as the
input buffer).  Use the variable MPI_IN_PLACE as the value of the root process
<i>recvbuf</i>.  In this case, <i>recvcount</i> and <i>recvtype</i> are ignored, and the root
process sends no data to itself. <p>
Note that MPI_IN_PLACE is a special kind
of value; it has the same restrictions on its use as MPI_BOTTOM. <p>
Because
the in-place option converts the receive buffer into a send-and-receive buffer,
a Fortran binding that includes INTENT must mark these as INOUT, not OUT.
<p>

<h2><a name='sect9' href='#toc9'>When Communicator is an Inter-communicator</a></h2>
<p>
When the communicator is an inter-communicator,
the root process in the first group sends data to all processes in the
second group.  The first group defines the root process.  That process uses
MPI_ROOT as the value of its <i>root</i> argument.  The remaining processes use
MPI_PROC_NULL as the value of their <i>root</i> argument.  All processes in the
second group use the rank of that root process in the first group as the
value of their <i>root</i> argument.   The receive buffer argument of the root
process in the first group must be consistent with the receive buffer argument
of the processes in the second group. <p>

<h2><a name='sect10' href='#toc10'>Errors</a></h2>
Almost all MPI routines return
an error value; C routines as the value of the function and Fortran routines
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
<h2><a name='sect11' href='#toc11'>See Also</a></h2>
<p>
<br>
<pre><a href="../man3/MPI_Scatterv.3.php">MPI_Scatterv</a>
<a href="../man3/MPI_Gather.3.php">MPI_Gather</a>
<a href="../man3/MPI_Gatherv.3.php">MPI_Gatherv</a>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
