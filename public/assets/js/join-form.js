document.addEventListener("DOMContentLoaded", function () {
  // Form configuration - defines each field's properties and validation
  const formConfig = [
    {
      id: "name",
      type: "text",
      required: true,
      validation: (value) => value.trim().length >= 3,
      errorMessage: "الاسم الثلاثي يجب أن يكون على الأقل 3 أحرف",
    },
    {
      id: "email",
      type: "email",
      required: true,
      validation: (value) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value),
      errorMessage: "البريد الإلكتروني غير صالح",
    },
    {
      id: "mobile",
      type: "tel",
      required: true,
      validation: (value) => /^[0-9]{10,15}$/.test(value),
      errorMessage: "رقم الجوال يجب أن يكون بين 10 إلى 15 رقمًا",
    },
    {
      id: "gender",
      type: "select",
      required: true,
      validation: (value) => ["male", "female"].includes(value),
      errorMessage: "الرجاء اختيار الجنس",
    },
    {
      id: "birth",
      type: "date",
      required: true,
      validation: (value) => {
        const birthDate = new Date(value);
        const today = new Date();
        const minAgeDate = new Date(
          today.getFullYear() - 18,
          today.getMonth(),
          today.getDate()
        );
        return birthDate <= minAgeDate;
      },
      errorMessage: "يجب أن يكون عمرك 18 سنة على الأقل",
    },
    {
      id: "city",
      type: "select",
      required: true,
      validation: (value) => value !== "",
      errorMessage: "الرجاء اختيار مدينة الإقامة",
    },
    {
      id: "uniform_size",
      type: "select",
      required: true,
      validation: (value) => value !== "",
      errorMessage: "الرجاء اختيار مقاس الزى الرسمى ",
    },
    {
      id: "blood_type",
      type: "select",
      required: true,
      validation: (value) => value !== "",
      errorMessage: "الرجاء اختيار   فصيلة الدم ",
    },
    {
      id: "education",
      type: "select",
      required: true,
      validation: (value) => value !== "",
      errorMessage: "الرجاء اختيار المؤهل التعليمي",
    },
    {
      id: "language",
      type: "select",
      required: true,
      validation: (value) => value !== "",
      errorMessage: "الرجاء اختيار اللغات",
    },
    {
      id: "personal_id_image",
      type: "file",
      required: true,
      validation: (file) => file && file.size <= 5 * 1024 * 1024, // 5MB max
      errorMessage: "يجب تحميل صورة الهوية (الحجم الأقصى 5MB)",
    },
    {
      id: "cv_file",
      type: "file",
      required: false,
      validation: (file) => !file || file.size <= 5 * 1024 * 1024, // 5MB max if provided
      errorMessage: "الحجم الأقصى للسيرة الذاتية هو 5MB",
    },
    {
      id: "confirmation",
      type: "checkbox",
      required: true,
      validation: (checked) => checked,
      errorMessage: "يجب الموافقة على الإقرار",
    },
  ];

  // Get form element
  const form = document.getElementById("applicationForm");

  // Add submit event listener
  form.addEventListener("submit", function (e) {
    e.preventDefault();

    // Validate all fields
    const isValid = validateForm();

    if (isValid) {
      // Form is valid, submit the form to the server
      form.submit();
    }
  });

  // Validate the entire form
  function validateForm() {
    let isValid = true;

    formConfig.forEach((field) => {
      const element = document.getElementById(field.id);
      const value = getFieldValue(element, field.type);
      const fieldValid = field.validation(value);

      if (!fieldValid && field.required) {
        isValid = false;
        showError(element, field.errorMessage);
      } else {
        clearError(element);
      }
    });

    return isValid;
  }

  // Get field value based on its type
  function getFieldValue(element, type) {
    if (element) {
      switch (type) {
        case "checkbox":
          return element.checked;
        case "file":
          return element.files[0];
        default:
          return element.value;
      }
    }
  }

  // Show error message for a field
  function showError(element, message) {
    // Remove any existing error first
    clearError(element);

    // Create error element
    const errorElement = document.createElement("p");
    errorElement.className = "mt-1 text-sm error-text";
    errorElement.textContent = message;

    // Insert after the input
    element.parentNode.insertBefore(errorElement, element.nextSibling);

    // Add error class to input
    element.classList.add("invalid");
  }

  // Clear error for a field
  function clearError(element) {
    if (!element) return;
    // Remove error message if exists
    const errorElement = element.nextElementSibling;
    if (errorElement && errorElement.classList.contains("error-text")) {
      errorElement.remove();
    }

    // Reset input styling
    element.classList.remove("invalid");
  }

  // Prepare form data for submission
  function prepareFormData() {
    const formData = {};

    formConfig.forEach((field) => {
      const element = document.getElementById(field.id);

      if (field.type === "file") {
        // For files, we might want to handle them differently (e.g., upload separately)
        formData[field.id] = element.files[0] ? element.files[0].name : null;
      } else {
        formData[field.id] = getFieldValue(element, field.type);
      }
    });

    return formData;
  }

  // Function to display file name in upload area
  function displayFileName(inputElement, containerClass) {
    const container = inputElement.closest(".file-upload");
    const fileNameDisplay =
      container.querySelector(".file-name-display") ||
      document.createElement("p");

    fileNameDisplay.className = "file-name-display text-sm text-gray-700 mt-1";

    if (inputElement.files.length > 0) {
      fileNameDisplay.textContent = inputElement.files[0].name;

      // Check file size (for validation)
      if (
        inputElement.id === "personal_id_image" &&
        inputElement.files[0].size > 5 * 1024 * 1024
      ) {
        fileNameDisplay.classList.add("text-red-600");
        fileNameDisplay.textContent += " (الملف كبير جداً، الحد الأقصى 5MB)";
      } else {
        fileNameDisplay.classList.remove("text-red-600");
      }
    } else {
      fileNameDisplay.textContent = "";
    }

    if (!container.querySelector(".file-name-display")) {
      container.appendChild(fileNameDisplay);
    }
  }

  // Add event listeners for file inputs
  const personal_id_image_input = document.getElementById("personal_id_image");
  const cv_file_input = document.getElementById("cv_file");

  personal_id_image_input.addEventListener("change", function () {
    displayFileName(this, "id-file-container");
    validateField(
      this,
      formConfig.find((f) => f.id === "personal_id_image")
    );
  });

  cv_file_input.addEventListener("change", function () {
    displayFileName(this, "cv-file-container");
    validateField(
      this,
      formConfig.find((f) => f.id === "cv_file")
    );
  });

  // Helper function to validate a single field
  function validateField(element, fieldConfig) {
    const value = getFieldValue(element, fieldConfig.type);
    const isValid = fieldConfig.required ? fieldConfig.validation(value) : true;

    if (!isValid) {
      showError(element, fieldConfig.errorMessage);
    } else {
      clearError(element);
    }
  }
  // Add real-time validation for fields when they lose focus
  formConfig.forEach((field) => {
    const element = document.getElementById(field.id);
    if (element) {
      element.addEventListener("blur", () => {
        const value = getFieldValue(element, field.type);
        const isValid = field.required ? field.validation(value) : true;

        if (!isValid) {
          showError(element, field.errorMessage);
        } else {
          clearError(element);
        }
      });
    }
  });
});
