## Account type

| Account type |
--------------
| Accounts receivable (A/R) |
| Current assets |
| Cash and cash equivalents |
| Fixed assets |
| Non-current assets |
| Accounts payable (A/P) |
| Credit card |
| Current liabilities |
| Non-current liabilities |
| Owner's equity |
| Income |
| Other income |
| Cost of sales |
| Expenses |
| Other expense |


## 1.  Accounts receivable (A/R)
| Accounts receivable (A/R) |
-----
| Accounts receivable (A/R) |

## 2. Current assets
| Current assets |
-----
| Allowance for bad debts |
| Assets available for sale |
| Development Costs |
| Employee Cash Advances |
| Inventory |
| Investments - Other |
| Loans to officers | 
| Loans to others |
| Loans to shareholders |
| Other current assets |
| Prepaid expenses |
| Retainage |
| Undeposited funds |

## 3. Cash and cash equivalents
| Cash and cash equivalents |
-----
| Bank |
| Cash and cash equivalents |
| Cash on hand |
| Client trust account |
| Money market |
| Rents held in trust |
| Savings | 

## 4. Fixed assets
| Fixed assets |
-----
| Accumulated depletion |
| Accumulated depreciation on property, plant and equipment |
| Buildings |
| Depletable Assets |
| Furniture and Fixtures |
| Land |
| Leasehold Improvements | 
| Machinery and equipment |
| Other fixed assets |
| Vehicles |

## 5. Non-current assets
| Non-current assets |
-----
| Accumulated amortisation of non-current assets |
| Assets held for sale |
| Deferred tax |
| Goodwill |
| Intangible Assets |
| LeaseBuyout |
| Licences | 
| Long-term investments |
| Organisational Costs |
| Other non-current assets |
| Security deposits |

## 6. Accounts payable (A/P)
| Accounts payable (A/P) |
-----
| Accounts payable (A/P) |

## 7. Credit card
| Credit card |
-----
| Credit card |

## 8. Current liabilities
| Current liabilities |
-----
| Accrued liabilites |
| Client Trust Accounts - Liabilities |
| Current Tax Liability |
| Current position of obligations under finance leases |
| Dividends payable |
| Income tax payable |
| Insurance payable | 
| Line of credit |
| Loan payable |
| Other current liabilities |
| Payroll clearing |
| Payroll liabilities |
| Prepaid expenses payable |
| Rents in trust - Liability |
| Sales and service tax payable |

## 9. Non-current liabilities
| Non-current liabilities |
-----
| Accrued holiday payable |
| Accured non-current liabilities |
| Liabilities related to assets held for sale |
| Long-term debt |
| Notes payable |
| Other non-current liabilities |
| Shareholder note payable | 

## 10. Owner's equity
| Owner's equity |
-----
| Accumulated adjustment |
| Dividend disbursed |
| Equity in earnings of subsidiaries |
| Opening balance equity |
| Ordinary shares |
| Other comprehensive income |
| Owner's Equity | 
| Paid-in capital or surplus |
| Partner contributions |
| Partner distributions |
| Partner's equity |
| Preferred shares |
| Retained earnings |
| Share capital | 
| Treasury shares |

## 11. Income
| Income |
-----
| Discounts/Refund given |
| Non-profit income |
| Other primary income |
| Revenue - general |
| Sales - retail |
| Sales - wholesale |
| Sales of product income | 
| Service/Fee income |
| Unapplied cash payment income |

## 12. Other income
| Other income |
-----
| Dividend income |
| Interest earned |
| Loss on disposal of assets |
| Other Investment Income |
| Other Miscellaneous Income |
| Other operating income |
| Tax-Exempt Interest | 
| Unrealised loss on securities, net of tax |

## 13. Cost of sales
| Cost of sales |
-----
| Cost of labour |
| Equipment rental |
| Freight and delivery  |
| Other cost of sales |
| Supplies and materials |

## 14. Expenses
| Expenses |
-----
| Advertising/Promotional |
| Amortisation expense |
| Auto |
| Bad debts |
| Bank charges |
| Charitable contributions |
| Commisions and fees | 
| Cost of labour |
| Dues and subscriptions |
| Equipement rental |
| Finance costs |
| Income tax expense |
| Insurance |
| Interest paid |
| Legal and professional fees |
| Loss on discontinued operations, ent of tax |
| Management compensation |
| Meals and entertainment |
| Office/General administrative expenses |
| Other miscellaneous service cost |
| Other selling expenses |
| Payroll expenses |
| Rent or lease of buildings |
| Repair and maintenance |
| Shipping and delivery expense |
| Supplies and materials |
| Taxes paid |
| Travel expenses - general and admin expenses |   
| Travel expenses - selling expense |
| Unapplied cash bill payment expense |
| Utilities |

## 15. Other expense
| Other expense |
-----
| Amortisation |
| Depreciation |
| Exchange gain or loss |
| Other expense |
| Penalties and settlements |

---

Certainly! Here's a suggested database structure for your bookkeeping program that supports the "New Account" form with "Account Name," "Account Type," and "Detail Type" fields.

### **Database Structure**

#### **1. Table: `accounts`**
This table will store the basic details of each account created by the user.

| Column Name  | Data Type      | Description                                |
|--------------|----------------|--------------------------------------------|
| `id`         | INT (Primary Key, Auto Increment) | Unique identifier for each account.   |
| `account_name` | VARCHAR(255)   | The name of the account provided by the user. |
| `account_type_id` | INT          | Foreign key referencing the `account_types` table. |
| `detail_type_id` | INT          | Foreign key referencing the `detail_types` table. |

#### **2. Table: `account_types`**
This table will store the predefined account types.

| Column Name  | Data Type      | Description                                |
|--------------|----------------|--------------------------------------------|
| `id`         | INT (Primary Key, Auto Increment) | Unique identifier for each account type. |
| `name`       | VARCHAR(255)   | The name of the account type (e.g., "Current assets"). |

#### **3. Table: `detail_types`**
This table will store the detail types corresponding to each account type.

| Column Name  | Data Type      | Description                                |
|--------------|----------------|--------------------------------------------|
| `id`         | INT (Primary Key, Auto Increment) | Unique identifier for each detail type. |
| `account_type_id` | INT          | Foreign key referencing the `account_types` table. |
| `name`       | VARCHAR(255)   | The name of the detail type (e.g., "Inventory"). |

### **Relationships**
- The `accounts` table is related to the `account_types` table through the `account_type_id`.
- The `detail_types` table is related to the `account_types` table through the `account_type_id`.
- The `accounts` table is related to the `detail_types` table through the `detail_type_id`.

### **SQL Scripts**

1. **Creating the `account_types` Table**
   ```sql
   CREATE TABLE account_types (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(255) NOT NULL
   );
   ```

2. **Creating the `detail_types` Table**
   ```sql
   CREATE TABLE detail_types (
       id INT AUTO_INCREMENT PRIMARY KEY,
       account_type_id INT NOT NULL,
       name VARCHAR(255) NOT NULL,
       FOREIGN KEY (account_type_id) REFERENCES account_types(id)
   );
   ```

3. **Creating the `accounts` Table**
   ```sql
   CREATE TABLE accounts (
       id INT AUTO_INCREMENT PRIMARY KEY,
       account_name VARCHAR(255) NOT NULL,
       account_type_id INT NOT NULL,
       detail_type_id INT NOT NULL,
       FOREIGN KEY (account_type_id) REFERENCES account_types(id),
       FOREIGN KEY (detail_type_id) REFERENCES detail_types(id)
   );
   ```

### **Populating the Tables**

You will need to populate the `account_types` and `detail_types` tables with the data you provided for account types and their corresponding detail types.

1. **Insert Account Types**
   ```sql
   INSERT INTO account_types (name) VALUES
   ('Accounts receivable (A/R)'),
   ('Current assets'),
   ('Cash and cash equivalents'),
   -- Add the rest here
   ('Other expense');
   ```

2. **Insert Detail Types**
   ```sql
   INSERT INTO detail_types (account_type_id, name) VALUES
   (1, 'Accounts receivable (A/R)'),
   (2, 'Allowance for bad debts'),
   (2, 'Assets available for sale'),
   -- Add the rest here
   (15, 'Penalties and settlements');
   ```

This setup will help you manage the relationship between account types and detail types efficiently and allows you to extend the system in the future.

Would you like to proceed with creating these tables and populating them, or do you need further customization?

---

Absolutely! Let's start from scratch, and I'll guide you through setting up a MySQL database using AMPPS and creating the necessary tables.

### **Step-by-Step Guide: Setting Up MySQL Database and Creating Tables**

#### **1. Install and Set Up AMPPS**
1. **Download AMPPS**: If you haven't already, download AMPPS from [here](https://ampps.com/download).
2. **Install AMPPS**: Follow the installation instructions to set it up on your computer.
3. **Launch AMPPS**: Open the AMPPS application, and make sure Apache and MySQL services are running.

#### **2. Accessing phpMyAdmin**
1. Open a browser and go to `http://localhost/phpmyadmin`.
2. phpMyAdmin is a web-based interface to manage MySQL databases, which comes pre-installed with AMPPS.

#### **3. Creating a New Database**
1. In phpMyAdmin, click on the "Databases" tab.
2. In the "Create database" field, enter a name for your database, such as `bookkeeping`.
3. Select `utf8mb4_general_ci` as the collation (recommended for better character support).
4. Click "Create."

#### **4. Creating the `account_types` Table**
1. Click on the `bookkeeping` database you just created.
2. Click on the "SQL" tab to enter SQL queries.
3. Enter the following SQL query to create the `account_types` table:

    ```sql
    CREATE TABLE account_types (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL
    );
    ```

4. Click "Go" to execute the query.

#### **5. Creating the `detail_types` Table**
1. Click on the "SQL" tab again to enter another SQL query.
2. Enter the following SQL query to create the `detail_types` table:

    ```sql
    CREATE TABLE detail_types (
        id INT AUTO_INCREMENT PRIMARY KEY,
        account_type_id INT NOT NULL,
        name VARCHAR(255) NOT NULL,
        FOREIGN KEY (account_type_id) REFERENCES account_types(id)
    );
    ```

3. Click "Go" to execute the query.

#### **6. Creating the `accounts` Table**
1. Click on the "SQL" tab again.
2. Enter the following SQL query to create the `accounts` table:

    ```sql
    CREATE TABLE accounts (
        id INT AUTO_INCREMENT PRIMARY KEY,
        account_name VARCHAR(255) NOT NULL,
        account_type_id INT NOT NULL,
        detail_type_id INT NOT NULL,
        FOREIGN KEY (account_type_id) REFERENCES account_types(id),
        FOREIGN KEY (detail_type_id) REFERENCES detail_types(id)
    );
    ```

3. Click "Go" to execute the query.

#### **7. Populating the `account_types` Table**
1. Click on the `account_types` table.
2. Click on the "Insert" tab.
3. Manually insert the account types by entering names like "Accounts receivable (A/R)," "Current assets," etc., into the name field and click "Go" after each entry.

Alternatively, you can use SQL to insert them all at once:
```sql
INSERT INTO account_types (name) VALUES
('Accounts receivable (A/R)'),
('Current assets'),
('Cash and cash equivalents'),
-- Add the rest here
('Other expense');
```

#### **8. Populating the `detail_types` Table**
1. Follow the same process to insert the detail types, either manually or through SQL queries like the ones we discussed earlier.

---

Once you've done this, your database will be ready with the basic structure for your bookkeeping program.

Would you like to proceed with this setup, or do you need help with any of these steps? Let me know how you'd like to move forward!


INSERT INTO detail_types (account_type_id, name) VALUES
(1, 'Accounts receivable (A/R)'),
(2, 'Allowance for bad debts'),
(2, 'Assets available for sale'),
(2, 'Development costs'),
(2, 'Employee cash advances'),
(2, 'Inventory'),
(2, 'Investments - other'),
(2, 'Loans to officers'),
(2, 'Loans to others'),
(2, 'Loans to shareholders'),
(2, 'Other current assets'),
(2, 'Prepaid expenses'),
(2, 'Retainage'),
(2, 'Undeposited funds'),
(3, 'Bank'),
(3, 'Cash and cash equivalents'),
(3, 'Cash on hand'),
(3, 'Client trust account'),
(3, 'Money market'),
(3, 'Rents held in trust'),
(3, 'Savings'),
(4, 'Accumulated depletion'),
(4, 'Accumulated depreciation on property, plant and equipment'),
(4, 'Buildings'),
(4, 'Depletable assets'),
(4, 'Furniture and fixtures'),
(4, 'Land'),
(4, 'Leasehold improvements'),
(4, 'Machinery and equipment'),
(4, 'Other fixed assets'),
(4, 'Vehicles'),
(5, 'Accumulated amortisation of non-current assets'),
(5, 'Assets held for sale'),
(5, 'Deferred tax'),
(5, 'Goodwill'),
(5, 'Intangible Assets'),
(5, 'LeaseBuyout'),
(5, 'Licences'),
(5, 'Long-term investments'),
(5, 'Organisational Costs'),
(5, 'Other non-current assets'),
(5, 'Security deposits'),
(6, 'Accounts payable (A/P)'),
(7, 'Credit card'),
(8, 'Accrued liabilites'),
(8, 'Client trust accounts - liabilities'),
(8, 'Current tax liability'),
(8, 'Current position of obligations under finance leases'),
(8, 'Dividends payable'),
(8, 'Income tax payable'),
(8, 'Insurance payable'),
(8, 'Line of credit'),
(8, 'Loan payable'),
(8, 'Other current liabilities'),
(8, 'Payroll clearing'),
(8, 'Payroll liabilities'),
(8, 'Prepaid expenses payable'),
(8, 'Rents in trust - liability'),
(8, 'Sales and service tax payable'),
(9, 'Accrued holiday payable'),
(9, 'Accured non-current liabilities'),
(9, 'Liabilities related to assets held for sale'),
(9, 'Long-term debt'),
(9, 'Notes payable'),
(9, 'Other non-current liabilities'),
(9, 'Shareholder note payable'),
(10, 'Accumulated adjustment'),
(10, 'Dividend disbursed'),
(10, 'Equity in earnings of subsidiaries'),
(10, 'Opening balance equity'),
(10, 'Ordinary shares'),
(10, 'Other comprehensive income'),
(10, 'Owner''s Equity'),
(10, 'Paid-in capital or surplus'),
(10, 'Partner contributions'),
(10, 'Partner distributions'),
(10, 'Partner''s equity'),
(10, 'Preferred shares'),
(10, 'Retained earnings'),
(10, 'Share capital'),
(10, 'Treasury shares'),
(11, 'Discounts/Refund given'),
(11, 'Non-profit income'),
(11, 'Other primary income'),
(11, 'Revenue - general'),
(11, 'Sales - retail'),
(11, 'Sales - wholesale'),
(11, 'Sales of product income'),
(11, 'Service/Fee income'),
(11, 'Unapplied cash payment income'),
(12, 'Dividend income'),
(12, 'Interest earned'),
(12, 'Loss on disposal of assets'),
(12, 'Other investment income'),
(12, 'Other miscellaneous income'),
(12, 'Other operating income'),
(12, 'Tax-exempt interest'),
(12, 'Unrealised loss on securities, net of tax'),
(13, 'Cost of labour'),
(13, 'Equipment rental'),
(13, 'Freight and delivery'),
(13, 'Other cost of sales'),
(13, 'Supplies and materials'),
(14, 'Advertising/Promotional'),
(14, 'Amortisation expense'),
(14, 'Auto'),
(14, 'Bad debts'),
(14, 'Bank charges'),
(14, 'Charitable contributions'),
(14, 'Commisions and fees'),
(14, 'Cost of labour'),
(14, 'Dues and subscriptions'),
(14, 'Equipement rental'),
(14, 'Finance costs'),
(14, 'Income tax expense'),
(14, 'Insurance'),
(14, 'Interest paid'),
(14, 'Legal and professional fees'),
(14, 'Loss on discontinued operations, ent of tax'),
(14, 'Management compensation'),
(14, 'Meals and entertainment'),
(14, 'Office/General administrative expenses'),
(14, 'Other miscellaneous service cost'),
(14, 'Other selling expenses'),
(14, 'Payroll expenses'),
(14, 'Rent or lease of buildings'),
(14, 'Repair and maintenance'),
(14, 'Shipping and delivery expense'),
(14, 'Supplies and materials'),
(14, 'Taxes paid'),
(14, 'Travel expenses - general and admin expenses'),
(14, 'Travel expenses - selling expense'),
(14, 'Unapplied cash bill payment expense'),
(14, 'Utilities'),
(15, 'Amortisation'),
(15, 'Depreciation'),
(15, 'Exchange gain or loss'),
(15, 'Other expense'),
(15, 'Penalties and settlements');