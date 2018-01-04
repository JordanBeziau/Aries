import { Mongo } from "meteor/mongo";

export const DynamicPages = new Mongo.Collection("dynamic_pages");

const DynamicPagesSchema = new SimpleSchema({
  title: {
    type: String
  },
  description: {
    type: String
  },
  active: {
    type: Boolean,
    defaultValue: true
  },
  created_at: {
    type: Date,
    defaultValue: new Date()
  }
});

DynamicPages.attachSchema(DynamicPagesSchema);
