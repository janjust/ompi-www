Index: ompi/mpi/c/comm_spawn_multiple.c
===================================================================
--- ompi/mpi/c/comm_spawn_multiple.c	(revision 25723)
+++ ompi/mpi/c/comm_spawn_multiple.c	(working copy)
@@ -42,7 +42,7 @@
                             int root, MPI_Comm comm, MPI_Comm *intercomm,
                             int *array_of_errcodes) 
 {
-    int i=0, rc=0, rank=0, flag;
+    int i=0, rc=0, rank=0, size=0, flag;
     ompi_communicator_t *newcomp=NULL;
     bool send_first=false; /* they are contacting us first */
     char port_name[MPI_MAX_PORT_NAME];
@@ -175,8 +175,18 @@
     
     /* set array of errorcodes */
     if (MPI_ERRCODES_IGNORE != array_of_errcodes) {
-        for ( i=0; i < newcomp->c_remote_group->grp_proc_count; i++ ) {
-            array_of_errcodes[i]=rc;
+        if (NULL != newcomp) {
+            for ( i=0; i < newcomp->c_remote_group->grp_proc_count; i++ ) {
+                array_of_errcodes[i]=rc;
+            }
+        } else {
+            for ( i=0; i < count; i++) {
+                size = size + array_of_maxprocs[i];
+            }
+
+            for ( i=0; i < size; i++) {
+                array_of_errcodes[i]=rc;
+            }
         }
     }
 