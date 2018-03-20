// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/spanner/v1/spanner.proto

package com.google.spanner.v1;

public interface PartitionReadRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.spanner.v1.PartitionReadRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The session used to create the partitions.
   * </pre>
   *
   * <code>string session = 1;</code>
   */
  java.lang.String getSession();
  /**
   * <pre>
   * Required. The session used to create the partitions.
   * </pre>
   *
   * <code>string session = 1;</code>
   */
  com.google.protobuf.ByteString
      getSessionBytes();

  /**
   * <pre>
   * Read only snapshot transactions are supported, read/write and single use
   * transactions are not.
   * </pre>
   *
   * <code>.google.spanner.v1.TransactionSelector transaction = 2;</code>
   */
  boolean hasTransaction();
  /**
   * <pre>
   * Read only snapshot transactions are supported, read/write and single use
   * transactions are not.
   * </pre>
   *
   * <code>.google.spanner.v1.TransactionSelector transaction = 2;</code>
   */
  com.google.spanner.v1.TransactionSelector getTransaction();
  /**
   * <pre>
   * Read only snapshot transactions are supported, read/write and single use
   * transactions are not.
   * </pre>
   *
   * <code>.google.spanner.v1.TransactionSelector transaction = 2;</code>
   */
  com.google.spanner.v1.TransactionSelectorOrBuilder getTransactionOrBuilder();

  /**
   * <pre>
   * Required. The name of the table in the database to be read.
   * </pre>
   *
   * <code>string table = 3;</code>
   */
  java.lang.String getTable();
  /**
   * <pre>
   * Required. The name of the table in the database to be read.
   * </pre>
   *
   * <code>string table = 3;</code>
   */
  com.google.protobuf.ByteString
      getTableBytes();

  /**
   * <pre>
   * If non-empty, the name of an index on [table][google.spanner.v1.PartitionReadRequest.table]. This index is
   * used instead of the table primary key when interpreting [key_set][google.spanner.v1.PartitionReadRequest.key_set]
   * and sorting result rows. See [key_set][google.spanner.v1.PartitionReadRequest.key_set] for further information.
   * </pre>
   *
   * <code>string index = 4;</code>
   */
  java.lang.String getIndex();
  /**
   * <pre>
   * If non-empty, the name of an index on [table][google.spanner.v1.PartitionReadRequest.table]. This index is
   * used instead of the table primary key when interpreting [key_set][google.spanner.v1.PartitionReadRequest.key_set]
   * and sorting result rows. See [key_set][google.spanner.v1.PartitionReadRequest.key_set] for further information.
   * </pre>
   *
   * <code>string index = 4;</code>
   */
  com.google.protobuf.ByteString
      getIndexBytes();

  /**
   * <pre>
   * The columns of [table][google.spanner.v1.PartitionReadRequest.table] to be returned for each row matching
   * this request.
   * </pre>
   *
   * <code>repeated string columns = 5;</code>
   */
  java.util.List<java.lang.String>
      getColumnsList();
  /**
   * <pre>
   * The columns of [table][google.spanner.v1.PartitionReadRequest.table] to be returned for each row matching
   * this request.
   * </pre>
   *
   * <code>repeated string columns = 5;</code>
   */
  int getColumnsCount();
  /**
   * <pre>
   * The columns of [table][google.spanner.v1.PartitionReadRequest.table] to be returned for each row matching
   * this request.
   * </pre>
   *
   * <code>repeated string columns = 5;</code>
   */
  java.lang.String getColumns(int index);
  /**
   * <pre>
   * The columns of [table][google.spanner.v1.PartitionReadRequest.table] to be returned for each row matching
   * this request.
   * </pre>
   *
   * <code>repeated string columns = 5;</code>
   */
  com.google.protobuf.ByteString
      getColumnsBytes(int index);

  /**
   * <pre>
   * Required. `key_set` identifies the rows to be yielded. `key_set` names the
   * primary keys of the rows in [table][google.spanner.v1.PartitionReadRequest.table] to be yielded, unless [index][google.spanner.v1.PartitionReadRequest.index]
   * is present. If [index][google.spanner.v1.PartitionReadRequest.index] is present, then [key_set][google.spanner.v1.PartitionReadRequest.key_set] instead names
   * index keys in [index][google.spanner.v1.PartitionReadRequest.index].
   * It is not an error for the `key_set` to name rows that do not
   * exist in the database. Read yields nothing for nonexistent rows.
   * </pre>
   *
   * <code>.google.spanner.v1.KeySet key_set = 6;</code>
   */
  boolean hasKeySet();
  /**
   * <pre>
   * Required. `key_set` identifies the rows to be yielded. `key_set` names the
   * primary keys of the rows in [table][google.spanner.v1.PartitionReadRequest.table] to be yielded, unless [index][google.spanner.v1.PartitionReadRequest.index]
   * is present. If [index][google.spanner.v1.PartitionReadRequest.index] is present, then [key_set][google.spanner.v1.PartitionReadRequest.key_set] instead names
   * index keys in [index][google.spanner.v1.PartitionReadRequest.index].
   * It is not an error for the `key_set` to name rows that do not
   * exist in the database. Read yields nothing for nonexistent rows.
   * </pre>
   *
   * <code>.google.spanner.v1.KeySet key_set = 6;</code>
   */
  com.google.spanner.v1.KeySet getKeySet();
  /**
   * <pre>
   * Required. `key_set` identifies the rows to be yielded. `key_set` names the
   * primary keys of the rows in [table][google.spanner.v1.PartitionReadRequest.table] to be yielded, unless [index][google.spanner.v1.PartitionReadRequest.index]
   * is present. If [index][google.spanner.v1.PartitionReadRequest.index] is present, then [key_set][google.spanner.v1.PartitionReadRequest.key_set] instead names
   * index keys in [index][google.spanner.v1.PartitionReadRequest.index].
   * It is not an error for the `key_set` to name rows that do not
   * exist in the database. Read yields nothing for nonexistent rows.
   * </pre>
   *
   * <code>.google.spanner.v1.KeySet key_set = 6;</code>
   */
  com.google.spanner.v1.KeySetOrBuilder getKeySetOrBuilder();

  /**
   * <pre>
   * Additional options that affect how many partitions are created.
   * </pre>
   *
   * <code>.google.spanner.v1.PartitionOptions partition_options = 9;</code>
   */
  boolean hasPartitionOptions();
  /**
   * <pre>
   * Additional options that affect how many partitions are created.
   * </pre>
   *
   * <code>.google.spanner.v1.PartitionOptions partition_options = 9;</code>
   */
  com.google.spanner.v1.PartitionOptions getPartitionOptions();
  /**
   * <pre>
   * Additional options that affect how many partitions are created.
   * </pre>
   *
   * <code>.google.spanner.v1.PartitionOptions partition_options = 9;</code>
   */
  com.google.spanner.v1.PartitionOptionsOrBuilder getPartitionOptionsOrBuilder();
}