<?php
$topdir = "../../..";
$title = "MPI_Type_struct(3) man page (version 4.1.8)";
$meta_desc = "Open MPI v4.1.8 man page: MPI_TYPE_STRUCT(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
     <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Type_struct</b> - Creates a <i>struct</i> data type -- use of this routine
is deprecated.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Type_struct(int count, int *array_of_blocklengths,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Aint *array_of_displacements, MPI_Datatype *array_of_types,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Datatype *newtype)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_TYPE_STRUCT(COUNT, ARRAY_OF_BLOCKLENGTHS,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;ARRAY_OF_DISPLACEMENTS, ARRAY_OF_TYPES,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;NEWTYPE, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COUNT, ARRAY_OF_BLOCKLENGTHS(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;ARRAY_OF_DISPLACEMENTS(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;ARRAY_OF_TYPES(*), NEWTYPE, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>Input Parameters</a></h2>

<dl>

<dt>count </dt>
<dd>Number of blocks (integer)  also number of entries
in arrays array_of_types,  array_of_displacements, and array_of_blocklengths.
</dd>

<dt>array_of_blocklengths </dt>
<dd>Number of elements in each block (array). </dd>

<dt>array_of_displacements
</dt>
<dd>Byte displacement of each block (array). </dd>

<dt>array_of_types </dt>
<dd>Type of elements
in each block (array of handles to datatype objects). <p>

<p> </dd>
</dl>

<h2><a name='sect5' href='#toc5'>Output Parameters</a></h2>

<dl>

<dt>newtype
</dt>
<dd>New datatype (handle). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Description</a></h2>
Note
that use of this routine is <i>deprecated</i> as of MPI-2. Use <a href="../man3/MPI_Type_create_struct.3.php">MPI_Type_create_struct</a>
instead. <p>
This deprecated routine is not available in C++. <p>
MPI_Type_struct
is the most general type constructor. It further generalizes <a href="../man3/MPI_Type_hindexed.3.php">MPI_Type_hindexed</a>
in that it allows each block to consist of replications of different datatypes.
<p>
<b>Example:</b> Let type1 have type map <br>
<pre>    {(double, 0), (char, 8)}
</pre>with extent 16. Let B = (2, 1, 3), D = (0, 16, 26), and T = (MPI_FLOAT,
type1, MPI_CHAR). Then a call to MPI_Type_struct(3, B, D, T, newtype) returns
a datatype with type map <br>
<pre>    {(float, 0), (float,4), (double, 16), (char, 24),
    (char, 26), (char, 27), (char, 28)}
</pre>That is, two copies of MPI_FLOAT starting at 0, followed by one copy of
type1 starting at 16, followed by three copies of MPI_CHAR, starting at
26. (We assume that a float occupies 4 bytes.) <p>
For more information, see
section 3.12.1 of the MPI-1.1 Standard.
<p>
<h2><a name='sect7' href='#toc7'>Notes</a></h2>
If an upperbound is set explicitly
by using the MPI datatype MPI_UB, the corresponding index must be positive.
<p>
The MPI-1 Standard originally made vague statements about padding and alignment;
this was intended to allow the simple definition of structures that could
be sent with a count greater than one. For example, <br>
<pre>    struct {int a; char b;} foo;
</pre>may have <br>
<pre>    sizeof(foo) = sizeof(int) + sizeof(char);
</pre>defining the extent of a datatype as including an epsilon, which would
have allowed an implementation to make the extent an MPI datatype for this
structure equal to 2*sizeof(int). However, since different systems might
define different paddings, a clarification to the standard made epsilon
zero. Thus, if you define a structure datatype and wish to send or receive
multiple items, you should explicitly include an MPI_UB entry as the last
member of the structure.  For example, the following code can be used for
the structure foo: <br>
<pre>    blen[0] = 1; indices[0] = 0; oldtypes[0] = MPI_INT;
    blen[1] = 1; indices[1] = &amp;foo.b - &amp;foo; oldtypes[1] = MPI_CHAR;
    blen[2] = 1; indices[2] = sizeof(foo); oldtypes[2] = MPI_UB;
    MPI_Type_struct( 3, blen, indices, oldtypes, &amp;newtype );
</pre>
<p>
<h2><a name='sect8' href='#toc8'>Errors</a></h2>
Almost all MPI routines return an error value; C routines as the
value of the function and Fortran routines in the last argument. C++ functions
do not return errors. If the default error handler is set to MPI::ERRORS_THROW_EXCEPTIONS,
then on error the C++ exception mechanism will be used to throw an MPI::Exception
object. <p>
Before the error value is returned, the current MPI error handler
is called. By default, this error handler aborts the MPI job, except for
I/O function errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>;
the predefined error handler MPI_ERRORS_RETURN may be used to cause error
values to be returned. Note that MPI does not guarantee that an MPI program
can continue past an error.
<p>
<h2><a name='sect9' href='#toc9'>See Also</a></h2>
<p>
<a href="../man3/MPI_Type_create_struct.3.php">MPI_Type_create_struct</a> <br>
<a href="../man3/MPI_Type_create_hindexed.3.php">MPI_Type_create_hindexed</a> <br>

<p> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>Input Parameters</a></li>
<li><a name='toc5' href='#sect5'>Output Parameters</a></li>
<li><a name='toc6' href='#sect6'>Description</a></li>
<li><a name='toc7' href='#sect7'>Notes</a></li>
<li><a name='toc8' href='#sect8'>Errors</a></li>
<li><a name='toc9' href='#sect9'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
