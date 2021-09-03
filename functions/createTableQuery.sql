CREATE TABLE IF NOT EXISTS form7a(
form7a_id int(11) NOT NULL primary key AUTO_INCREMENT,
form7a_natureOfCredit            VARCHAR(100),
form7a_notionalLimitSanctionDate DATE,
form7a_notionalLimitAmount       DECIMAL(15,2),
form7a_notionalLimitExpiry       DATE,
form7a_sanctioningAuthority      VARCHAR(20),
form7a_lcDate                    DATE,
form7a_lcTenor                   INT,
form7a_lcValueFc                 DECIMAL(15,2),
form7a_lcValueBdt                DECIMAL(15,2),
form7a_lcMarginPercentage        INT,
form7a_dateDocumentReceivedInBranch DATE,
form7a_documentValue             DECIMAL(15,2),
form7a_lodgementDate             DATE,
form7a_dateDiscrepencyNotice     DATE, 
form7a_dueDate                   DATE,
form7a_acceptancePaymentDate     DATE,
form7a_padCreatoionDate          DATE,
form7a_padAmount                 DECIMAL(15,2),
form7a_sourceOfAdjustment        VARCHAR(20),
form7a_billEntryMatchingDate     DATE,
form7a_amountSinceeAdjusted      DECIMAL(15,2),
form7a_presentOutstanding        DECIMAL(15,2),
form7a_forcedLoanCreationDate    DATE,
form7a_forcedLoanCreationReason  VARCHAR(100),
form7a_classificationStatus      VARCHAR(10),
form7a_litigableAmount           DECIMAL(15,2),
form7a_remarks                   VARCHAR(100)
)