Index: ompi/mpi/cxx/comm.h
===================================================================
--- ompi/mpi/cxx/comm.h	(revision 25570)
+++ ompi/mpi/cxx/comm.h	(working copy)
@@ -382,7 +382,7 @@
 
   static Errhandler Create_errhandler(Comm::Errhandler_fn* function);
 
-  virtual void Set_errhandler(const Errhandler& errhandler) const;
+  virtual void Set_errhandler(const Errhandler& errhandler);
 
   virtual Errhandler Get_errhandler() const;
 
Index: ompi/mpi/cxx/topology_inln.h
===================================================================
--- ompi/mpi/cxx/topology_inln.h	(revision 25570)
+++ ompi/mpi/cxx/topology_inln.h	(working copy)
@@ -99,7 +99,7 @@
 }
 
 inline MPI::Cartcomm
-MPI::Cartcomm::Sub(const bool remain_dims[]) 
+MPI::Cartcomm::Sub(const bool remain_dims[]) const
 {
   int ndims;
   MPI_Cartdim_get(mpi_comm, &ndims);
Index: ompi/mpi/cxx/intercomm.h
===================================================================
--- ompi/mpi/cxx/intercomm.h	(revision 25570)
+++ ompi/mpi/cxx/intercomm.h	(working copy)
@@ -77,7 +77,7 @@
 
   virtual Group Get_remote_group() const;
 
-  virtual Intracomm Merge(bool high);
+  virtual Intracomm Merge(bool high) const;
 
   virtual Intercomm Create(const Group& group) const;
 
Index: ompi/mpi/cxx/mpicxx.cc
===================================================================
--- ompi/mpi/cxx/mpicxx.cc	(revision 25570)
+++ ompi/mpi/cxx/mpicxx.cc	(working copy)
@@ -102,11 +102,13 @@
 // optional datatype (C / C++)
 const Datatype UNSIGNED_LONG_LONG(MPI_UNSIGNED_LONG_LONG);
 const Datatype LONG_LONG(MPI_LONG_LONG);
+const Datatype LONG_LONG_INT(MPI_LONG_LONG_INT);
 
 // c++ types
 const Datatype BOOL((MPI_Datatype)&(ompi_mpi_cxx_bool));
 const Datatype COMPLEX((MPI_Datatype)&(ompi_mpi_cxx_cplex));
 const Datatype DOUBLE_COMPLEX((MPI_Datatype)&(ompi_mpi_cxx_dblcplex));
+const Datatype F_DOUBLE_COMPLEX((MPI_Datatype)&(ompi_mpi_cxx_dblcplex));
 const Datatype LONG_DOUBLE_COMPLEX((MPI_Datatype)&(ompi_mpi_cxx_ldblcplex));
 
 // reserved communicators
Index: ompi/mpi/cxx/functions.h
===================================================================
--- ompi/mpi/cxx/functions.h	(revision 25570)
+++ ompi/mpi/cxx/functions.h	(working copy)
@@ -39,6 +39,15 @@
 // Environmental Inquiry
 //
 
+int
+Add_error_class();
+
+int
+Add_error_code(int errorclass);
+
+void
+Add_error_string(int errorcode, const char* string);
+
 void 
 Get_processor_name(char* name, int& resultlen);
 
Index: ompi/mpi/cxx/constants.h
===================================================================
--- ompi/mpi/cxx/constants.h	(revision 25570)
+++ ompi/mpi/cxx/constants.h	(working copy)
@@ -40,20 +40,42 @@
 static const int ERR_INTERN = MPI_ERR_INTERN;
 static const int ERR_PENDING = MPI_ERR_PENDING;
 static const int ERR_IN_STATUS = MPI_ERR_IN_STATUS;
-static const int ERR_LASTCODE = MPI_ERR_LASTCODE;
-
+static const int ERR_ACCESS = MPI_ERR_ACCESS;
+static const int ERR_AMODE = MPI_ERR_AMODE;
+static const int ERR_ASSERT = MPI_ERR_ASSERT;
+static const int ERR_BAD_FILE = MPI_ERR_BAD_FILE;
 static const int ERR_BASE = MPI_ERR_BASE;
+static const int ERR_CONVERSION = MPI_ERR_CONVERSION;
+static const int ERR_DISP = MPI_ERR_DISP;
+static const int ERR_DUP_DATAREP = MPI_ERR_DUP_DATAREP;
+static const int ERR_FILE_EXISTS = MPI_ERR_FILE_EXISTS;
+static const int ERR_FILE_IN_USE = MPI_ERR_FILE_IN_USE;
+static const int ERR_FILE = MPI_ERR_FILE;
+static const int ERR_INFO_KEY = MPI_ERR_INFO_KEY;;
+static const int ERR_INFO_NOKEY = MPI_ERR_INFO_NOKEY;
 static const int ERR_INFO_VALUE = MPI_ERR_INFO_VALUE;
-static const int ERR_INFO_KEY = MPI_ERR_INFO_KEY;
-static const int ERR_INFO_NOKEY = MPI_ERR_INFO_NOKEY;
+static const int ERR_INFO = MPI_ERR_INFO;
+static const int ERR_IO = MPI_ERR_IO;
 static const int ERR_KEYVAL = MPI_ERR_KEYVAL;
+static const int ERR_LOCKTYPE = MPI_ERR_LOCKTYPE;
 static const int ERR_NAME = MPI_ERR_NAME;
 static const int ERR_NO_MEM = MPI_ERR_NO_MEM;
+static const int ERR_NOT_SAME = MPI_ERR_NOT_SAME;
+static const int ERR_NO_SPACE = MPI_ERR_NO_SPACE;
+static const int ERR_NO_SUCH_FILE = MPI_ERR_NO_SUCH_FILE;
+static const int ERR_PORT = MPI_ERR_PORT;
+static const int ERR_QUOTA = MPI_ERR_QUOTA;
+static const int ERR_READ_ONLY = MPI_ERR_READ_ONLY;
+static const int ERR_RMA_CONFLICT = MPI_ERR_RMA_CONFLICT;
+static const int ERR_RMA_SYNC = MPI_ERR_RMA_SYNC;
 static const int ERR_SERVICE = MPI_ERR_SERVICE;
+static const int ERR_SIZE = MPI_ERR_SIZE;
 static const int ERR_SPAWN = MPI_ERR_SPAWN;
+static const int ERR_UNSUPPORTED_DATAREP = MPI_ERR_UNSUPPORTED_DATAREP;
+static const int ERR_UNSUPPORTED_OPERATION = MPI_ERR_UNSUPPORTED_OPERATION;
 static const int ERR_WIN = MPI_ERR_WIN;
+static const int ERR_LASTCODE = MPI_ERR_LASTCODE;
 
-
 // assorted constants
 OMPI_DECLSPEC extern void* const BOTTOM;
 OMPI_DECLSPEC extern void* const IN_PLACE;
@@ -137,12 +159,14 @@
 
 // optional datatype (C / C++)
 OMPI_DECLSPEC extern const Datatype LONG_LONG;
+OMPI_DECLSPEC extern const Datatype LONG_LONG_INT;
 OMPI_DECLSPEC extern const Datatype UNSIGNED_LONG_LONG;
 
 // c++ types
 OMPI_DECLSPEC extern const Datatype BOOL;
 OMPI_DECLSPEC extern const Datatype COMPLEX;
 OMPI_DECLSPEC extern const Datatype DOUBLE_COMPLEX;
+OMPI_DECLSPEC extern const Datatype F_DOUBLE_COMPLEX;
 OMPI_DECLSPEC extern const Datatype LONG_DOUBLE_COMPLEX;
 
 // special datatypes for contstruction of derived datatypes
Index: ompi/mpi/cxx/functions_inln.h
===================================================================
--- ompi/mpi/cxx/functions_inln.h	(revision 25570)
+++ ompi/mpi/cxx/functions_inln.h	(working copy)
@@ -53,6 +53,28 @@
 // Environmental Inquiry
 //
 
+inline int
+MPI::Add_error_class()
+{
+    int errcls;
+    (void)MPI_Add_error_class(&errcls);
+    return errcls;
+}
+
+inline int
+MPI::Add_error_code(int errorclass)
+{
+    int errcode;
+    (void)MPI_Add_error_code(errorclass, &errcode);
+    return errcode;
+}
+
+inline void
+MPI::Add_error_string(int errorcode, const char* string)
+{
+    (void)MPI_Add_error_string(errorcode, const_cast<char *>(string));
+}
+
 inline void 
 MPI::Get_processor_name(char* name, int& resultlen)
 {
Index: ompi/mpi/cxx/datatype_inln.h
===================================================================
--- ompi/mpi/cxx/datatype_inln.h	(revision 25570)
+++ ompi/mpi/cxx/datatype_inln.h	(working copy)
@@ -163,7 +163,30 @@
   return size;
 }
 
+inline void
+MPI::Datatype::Pack_external(const char* datarep, const void* inbuf, int incount,
+            void* outbuf, MPI::Aint outsize, MPI::Aint& position) const
+{
+    (void)MPI_Pack_external(const_cast<char *>(datarep), const_cast<void *>(inbuf),
+                             incount, mpi_datatype, outbuf, outsize, &position);
+}
 
+inline MPI::Aint
+MPI::Datatype::Pack_external_size(const char* datarep, int incount) const
+{
+    MPI_Aint addr;
+    (void)MPI_Pack_external_size(const_cast<char *>(datarep), incount, mpi_datatype, &addr);
+    return addr;
+}
+
+inline void
+MPI::Datatype::Unpack_external(const char* datarep, const void* inbuf,
+            MPI::Aint insize, MPI::Aint& position, void* outbuf, int outcount) const
+{
+    (void)MPI_Unpack_external(const_cast<char *>(datarep), const_cast<void *>(inbuf),
+                               insize, &position, outbuf, outcount, mpi_datatype);
+}
+
 //
 // Miscellany
 //
@@ -182,7 +205,54 @@
   return type;
 }
 
+inline MPI::Datatype
+MPI::Datatype::Create_darray(int size, int rank, int ndims,
+                   const int array_of_gsizes[], const int array_of_distribs[],
+                   const int array_of_dargs[],  const int array_of_psizes[],
+                   int order) const
+{
+    MPI_Datatype type;
+    (void) MPI_Type_create_darray(size, rank, ndims,
+                   const_cast<int *>(array_of_gsizes),
+                   const_cast<int *>(array_of_distribs),
+                   const_cast<int *>(array_of_dargs),
+                   const_cast<int *>(array_of_psizes),
+                   order, mpi_datatype, &type);
+    return type;
+}
 
+inline MPI::Datatype
+MPI::Datatype::Create_f90_complex(int p, int r)
+{
+    MPI_Datatype type;
+    (void) MPI_Type_create_f90_complex(p, r, &type);
+    return type;
+}
+
+inline MPI::Datatype
+MPI::Datatype::Create_f90_integer(int r)
+{
+    MPI_Datatype type;
+    (void) MPI_Type_create_f90_integer(r, &type);
+    return type;
+}
+
+inline MPI::Datatype
+MPI::Datatype::Create_f90_real(int p, int r)
+{
+    MPI_Datatype type;
+    (void) MPI_Type_create_f90_real(p, r, &type);
+    return type;
+}
+
+inline MPI::Datatype
+MPI::Datatype::Match_size(int typeclass, int size)
+{
+    MPI_Datatype type;
+    (void) MPI_Type_match_size(typeclass, size, &type);
+    return type;
+}
+
 //
 // External Interfaces
 //
Index: ompi/mpi/cxx/comm_inln.h
===================================================================
--- ompi/mpi/cxx/comm_inln.h	(revision 25570)
+++ ompi/mpi/cxx/comm_inln.h	(working copy)
@@ -543,7 +543,7 @@
 }
 
 inline void
-MPI::Comm::Set_errhandler(const MPI::Errhandler& errhandler) const
+MPI::Comm::Set_errhandler(const MPI::Errhandler& errhandler)
 {
     (void)MPI_Comm_set_errhandler(mpi_comm, errhandler);
 }
Index: ompi/mpi/cxx/datatype.h
===================================================================
--- ompi/mpi/cxx/datatype.h	(revision 25570)
+++ ompi/mpi/cxx/datatype.h	(working copy)
@@ -148,6 +148,14 @@
 
   virtual int Pack_size(int incount, const Comm& comm) const;
 
+  virtual void Pack_external(const char* datarep, const void* inbuf, int incount,
+              void* outbuf, Aint outsize, Aint& position) const;
+
+  virtual Aint Pack_external_size(const char* datarep, int incount) const;
+
+  virtual void Unpack_external(const char* datarep, const void* inbuf,
+              Aint insize, Aint& position, void* outbuf, int outcount) const;
+
   //
   // Miscellany
   //
@@ -156,6 +164,20 @@
 				   const int array_of_starts[], int order) 
     const;   
 
+  virtual Datatype Create_darray(int size, int rank, int ndims,
+                   const int array_of_gsizes[], const int array_of_distribs[],
+                   const int array_of_dargs[],  const int array_of_psizes[],
+                   int order) const;
+
+  // Language Binding
+  static Datatype Create_f90_complex(int p, int r);
+
+  static Datatype Create_f90_integer(int r);
+
+  static Datatype Create_f90_real(int p, int r);
+
+  static Datatype Match_size(int typeclass, int size);
+
   //
   // External Interfaces
   //
Index: ompi/mpi/cxx/topology.h
===================================================================
--- ompi/mpi/cxx/topology.h	(revision 25570)
+++ ompi/mpi/cxx/topology.h	(working copy)
@@ -80,7 +80,7 @@
   virtual void Shift(int direction, int disp,
 		     int &rank_source, int &rank_dest) const;
   
-  virtual Cartcomm Sub(const bool remain_dims[]);
+  virtual Cartcomm Sub(const bool remain_dims[]) const;
 
   virtual int Map(int ndims, const int dims[], const bool periods[]) const;
 
Index: ompi/mpi/cxx/intercomm_inln.h
===================================================================
--- ompi/mpi/cxx/intercomm_inln.h	(revision 25570)
+++ ompi/mpi/cxx/intercomm_inln.h	(working copy)
@@ -51,7 +51,7 @@
 }
 
 inline MPI::Intracomm
-MPI::Intercomm::Merge(bool high)
+MPI::Intercomm::Merge(bool high) const
 {
   MPI_Comm newcomm;
   (void)MPI_Intercomm_merge(mpi_comm, (int)high, &newcomm);

