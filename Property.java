package Main;

public class Property {
	// Attributes
	private String propertyID;
	private String description;
	private String propertyOwnerId;

	// Constructor
	public Property(String propertyID, String description, String propertyOwnerId) {
		this.propertyID = propertyID;
		this.description = description;
		this.propertyOwnerId = propertyOwnerId;
	}

	// Getter and Setter for PropertyID
	public String getPropertyID() {
		return propertyID;
	}

	public void setPropertyID(String propertyID) {
		this.propertyID = propertyID;
	}

	// Getter and Setter for Description
	public String getDescription() {
		return description;
	}

	public void setDescription(String description) {
		this.description = description;
	}

	// Getter and Setter for PropertyOwnerId
	public String getPropertyOwnerId() {
		return propertyOwnerId;
	}

	public void setPropertyOwnerId(String propertyOwnerId) {
		this.propertyOwnerId = propertyOwnerId;
	}
}